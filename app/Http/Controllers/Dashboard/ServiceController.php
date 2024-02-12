<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::select('id', 'avatar', 'name')->get()->map(function ($service) {
            $service->avatar = asset("storage/" . $service->avatar);

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);

        $service->video_cover = asset("storage/" . $service->video_cover);
        $service->avatar = asset("storage/" . $service->avatar);

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
 

        return response()->json($service);
        //
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
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['message' => 'service not found'], 404);
        }

        Storage::delete(['public/' . $service->avatar, 'public/' . $service->cover, 'public/' . $service->image_symbol, 'public/' . $service->offer_image]);

        $service->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
