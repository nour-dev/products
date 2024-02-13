<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

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
        //
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
        //
    }
}
