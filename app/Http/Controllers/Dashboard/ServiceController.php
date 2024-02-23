<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Rules\StringOrFile;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    protected $validated;
    protected $original;

    protected function assetify($service)
    {

        if ($service->video_cover != null) {
            $service->video_cover = asset("storage/" . $service->video_cover);
        }
        if ($service->avatar != null) {
            $service->avatar = asset("storage/" . $service->avatar);
        }

        if ($service->gallery != null) {
            $service->gallery = $service->gallery->map(function ($image) {
                $image = asset('storage/' . $image);

                return $image;
            });
        }

        if ($service->reviews != null) {
            $service->reviews = $service->reviews->map(function ($feature) {
                $feature['img'] = asset('storage/' . $feature['img']);

                return $feature;
            });
        }
        return $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::select('id', 'avatar', 'name')->paginate(12)->through(function ($service) {
            $service = $this->assetify($service);

            return $service;
        });

        return response()->json($services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'description' => 'required|string',
                'avatar' => 'required|image',
                'video_cover' => 'required|file',
                'reviews' => 'nullable|array',
                'reviews.*.img' => 'image',
                'gallery' => 'nullable',
                'gallery.*' => 'image',
            ]);

            $validated['avatar'] = $request->file('avatar')->store('services', 'public');
            $validated['video_cover'] = $request->file('video_cover')->store('services', 'public');

            $path = null;
            // Handle gallery images if necessary
            if ($request->hasFile('gallery')) {
                foreach ($request->file('gallery') as $image) {
                    // push to paths array && store to storage
                    $name = $image->store('services/gallery', 'public');
                    $path[] = $name;
                }
                $validated['gallery'] = $path;
            }
            // handling features
            if ($request->has('reviews')) {
                // get features assoc array with files
                $features = $request->all('reviews')['reviews'];
                // remove old features assoc array from validated
                unset($validated['reviews']);
                // go throw features
                foreach ($features as $feature) {
                    // add feature to validated array
                    $validated['reviews'][] = [
                        'name' => $feature['name'],
                        'comment' => $feature['comment'],
                        'img' => $feature['img']->store('services/reviews', 'public')
                    ];
                };
            }

            $service = Service::create($validated);

            return response()->json($service, 201);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);

        $service = $this->assetify($service);


        return response()->json($service);
        //
    }

    public function setOrCleanField($field)
    {
        if (is_string(request($field))) {
            $this->validated[$field] = $this->original->{$field};
        }
        if (request()->hasFile($field)) {
            Storage::delete('public/' . $this->original->get($field));
            $this->validated[$field] = request()->file($field)->store('categories', 'public');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        // fetch original model
        $this->original = Service::find($id);
        // check original existance
        if (!$this->original) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        // fetch user input from edit page
        $this->validated = request()->validate([
            'name' => 'nullable|string',
            'description' => 'nullable|string',
            'avatar' => ['nullable', new StringOrFile],
            'video_cover' => ['nullable', new StringOrFile],
            'reviews' => 'nullable|array',
            'reviews.*.img' => [new StringOrFile],
            'gallery' => 'nullable|array',
            'gallery.*' => ['nullable', new StringOrFile],
        ]);

        // set file fields by helper method
        $this->setOrCleanField('avatar');
        $this->setOrCleanField('video_cover');

        // Handle gallery images if exist as files or ignore
        if (request()->has('gallery')) {
            $path = [];
            foreach (request('gallery') as $image) {
                if ($image instanceof UploadedFile) {
                    // push to paths array && store to storage
                    $name = $image->store('services/gallery', 'public');
                    $path[] = $name;
                }
                if (is_string($image)) {
                    $path[] = str_replace(config('app.url') . ':8000/storage/', '', $image);
                }
            }
            $this->validated['gallery'] = $path;
        }
        // handling features
        if (request()->has('reviews')) {
            // get reviews assoc array with files
            $reviews = request('reviews');
            // go throw reviews
            foreach ($reviews as $key => $review) {
                // if new image uploaded set it
                if ($review['img'] instanceof UploadedFile) {
                    // add review to validated array
                    $this->validated['reviews'][$key] = [
                        'name' => $review['name'],
                        'comment' => $review['comment'],
                        'img' => $review['img']->store('services/reviews', 'public')
                    ];
                }
                // fix url if file not changed
                if (is_string($review['img'])) {
                    $this->validated['reviews'][$key] = [
                        'name' => $review['name'],
                        'comment' => $review['comment'],
                        'img' => str_replace(config('app.url') . ':8000/storage/', '', $image)
                    ];
                }
            };
        }

        $this->original->fill($this->validated);
        $this->original->save();

        return response()->json($this->original, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['message' => 'service not found'], 404);
        }

        Storage::delete(['public/' . $service->avatar, 'public/' . $service->cover, 'public/' . $service->image_symbol, 'public/' . $service->offer_image]);

        $service->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
