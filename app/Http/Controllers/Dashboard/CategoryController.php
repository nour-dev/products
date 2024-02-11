<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{

    function assetify($category, $handleFeatures = false)
    {

        $category->avatar =  asset("storage/" . $category->avatar);
        $category->cover =  asset("storage/" . $category->cover);

        if ($category->offer_image != null) {
            $category->offer_image =  asset("storage/" . $category->offer_image);
        }
        if ($category->image_symbol != null) {
            $category->image_symbol =  asset("storage/" . $category->image_symbol);
        }


        if ($category->gallery != null) {
            $category->gallery = $category->gallery->map(function ($image) {
                $image = asset('storage/' . $image);

                return $image;
            });
        }

        if ($handleFeatures && $category->features != null) {
            $category->features = $category->features->map(function ($feature) {
                $feature['img'] = asset('storage/' . $feature['img']);

                return $feature;
            });
        }
        return $category;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(20)->through(function ($category) {
            $category = $this->assetify($category);
            return $category;
        });

        return response()->json($categories);
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category = $this->assetify($category, true);

        return response()->json($category);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        Storage::delete(['public/' . $category->avatar, 'public/' . $category->cover, 'public/' . $category->image_symbol, 'public/' . $category->offer_image]);

        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
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
                'avatar' => 'required|image',
                'cover' => 'required|image',
                'features' => 'nullable|array',
                'features.*.img' => 'image',
                'details' => 'nullable|string',
                'image_symbol' => 'nullable|image',
                'gallery' => 'nullable',
                'gallery.*' => 'image',
                'description' => 'required|string',
                'offer_title' => 'nullable|string',
                'offer_image' => 'nullable|image',
            ]);

            $validated['avatar'] = $request->file('avatar')->store('categories', 'public');
            $validated['cover'] = $request->file('cover')->store('categories', 'public');

            if ($request->hasFile('offer_image')) {
                $validated['offer_image'] = $request->file('offer_image')->store('categories/offers', 'public');
            }
            if ($request->hasFile('image_symbol')) {
                $validated['image_symbol'] = $request->file('image_symbol')->store('categories/symbols', 'public');
            }


            $path = null;
            // Handle gallery images if necessary
            if ($request->hasFile('gallery')) {
                foreach ($request->file('gallery') as $image) {
                    // push to paths array && store to storage
                    $name = $image->store('categories/gallery', 'public');
                    $path[] = $name;
                }
                $validated['gallery'] = $path;
            }
            // handling features
            if ($request->has('features')) {
                // get features assoc array with files
                $features = $request->all('features')['features'];
                // remove old features assoc array from validated
                unset($validated['features']);
                // go throw features
                foreach ($features as $feature) {
                    // add feature to validated array
                    $validated['features'][] = [
                        'title' => $feature['title'],
                        'description' => $feature['description'],
                        'img' => $feature['img']->store('categories/features', 'public')
                    ];
                };
            }

            $category = Category::create($validated);

            return response()->json($category, 201);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        $validated = $request->validate([]);
        $category->update($validated);

        return response()->json($category);
    }
}
