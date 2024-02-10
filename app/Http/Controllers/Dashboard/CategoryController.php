<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all()->map(function ($category) {
            $category->avatar =  asset("storage/" . $category->avatar);
            $category->cover =  asset("storage/" . $category->cover);
            
            return $category;
        });

        return response()->json($categories);
    }

    public function show($id)
    {
        $category = Category::find($id);
        $category->avatar =  asset("storage/" . $category->avatar);
        $category->cover =  asset("storage/" . $category->cover);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

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
                'features' => 'nullable|json',
                'details' => 'nullable|string',
                'image_symbol' => 'nullable|image',
                'gallery' => 'nullable|json',
                'description' => 'required|string',
                'offer_title' => 'nullable|string',
                'offer_image' => 'nullable|image',
            ]);

            $validated['avatar'] = $request->file('avatar')->store('categories', 'public');
            $validated['cover'] = $request->file('cover')->store('categories', 'public');
            //     $validated['image_symbol'] = $request->file('image_symbol')->store('categories', 'public');

            if ($request->hasFile('offer_image')) {
                $validated['offer_image'] = $request->file('offer_image')->store('categories/offers', 'public');
            }

            // Handle gallery images if necessary
            if ($request->filled('gallery')) {
                $gallery = json_decode($request->input('gallery'), true);
                $galleryPaths = [];
                foreach ($gallery as $galleryImage) {
                    if (isset($galleryImage['image'])) {
                        $path = $galleryImage['image']->store('categories/gallery', 'public');
                        $galleryPaths[] = $path;
                    }
                }
                $validated['gallery'] = json_encode($galleryPaths);
            }

            $category = Category::create($validated);

            return response()->json($category, 201);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
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
