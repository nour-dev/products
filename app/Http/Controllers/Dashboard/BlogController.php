<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    protected function assetify($blog)
    {
        $blog->image =  asset("storage/" . $blog->image);
        $blog->cover =  asset("storage/" . $blog->cover);

        if ($blog->images != null) {
            $blog->images = $blog->images->map(function ($image) {
                $image = asset('storage/' . $image);

                return $image;
            });
        }

        return $blog;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate(20)->through(function ($blog) {
            $blog = $this->assetify($blog);
            return $blog;
        });

        return response()->json($blogs);
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
                'author' => 'required|string',
                'title' => 'required|string',
                'article' => 'required|string',
                'image' => 'required|image',
                'cover' => 'required|image',
                'images' => 'nullable',
                'images.*' => 'image',
            ]);

            $validated['image'] = $request->file('image')->store('blogs/images', 'public');
            $validated['cover'] = $request->file('cover')->store('blogs/covers', 'public');

            $path = null;
            // Handle gallery images if necessary
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // push to paths array && store to storage
                    $name = $image->store('blogs/gallery', 'public');
                    $path[] = $name;
                }
                $validated['images'] = $path;
            }

            $category = Blog::create($validated);

            return response()->json($category, 201);
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
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }
        $blog = $this->assetify($blog);

        return response()->json($blog);
    }

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $blog = Blog::find($id);
        if (!$blog) {
            return response()->json(['message' => 'blog not found'], 404);
        }

        Storage::delete(['public/' . $blog->avatar, 'public/' . $blog->cover]);

        $blog->delete();
        return response()->json(['message' => 'blog deleted successfully']);
    }
}
