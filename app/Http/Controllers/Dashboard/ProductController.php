<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Rules\StringOrFile;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    protected $model;
    protected $validated;
    protected $original;


    protected function assetify($product)
    {
        $product->image = $product->image ? asset('storage/' . $product->image) : null;
        $product->image_cover = $product->image_cover ? asset('storage/' . $product->image_cover) : null;
        if ($product->details != null) {
            $product->details = $product->details->map(function ($image) {
                $image = asset('storage/' . $image);

                return $image;
            });
        }
        return $product;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->paginate(12)->through(function ($product) {
            $product = $this->assetify($product);
            return $product;
        });

        return response()->json($products);
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'desc' => 'required|string',
            'image' => 'required|image',
            'image_cover' => 'required|image',
            'details' => 'required|array',
            'details.*' => 'image',
            'category_id' => 'required|exists:categories,id'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image'] = $imagePath;
        }

        if ($request->hasFile('image_cover')) {
            $imageCoverPath = $request->file('image_cover')->store('products', 'public');
            $validatedData['image_cover'] = $imageCoverPath;
        }
        $path = null;
        // Handle gallery images if necessary
        if ($request->hasFile('details')) {
            $validatedData['details'] = [];
            foreach ($request->file('details') as $image) {
                // push to paths array && store to storage
                $name = $image->store('products/details', 'public');
                $path[] = $name;
            }
            $validatedData['details'] = $path;
        }
        $product = new Product();
        $product->fill($validatedData);
        $product->save();
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product = $this->assetify($product);

        return response()->json($product);
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
    public function update($id)
    {
        $this->original = Product::find($id);
        if (!$this->original) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $this->validated = request()->validate([
            'name' => 'nullable|string|max:255',
            'price' => 'nullable|integer',
            'desc' => 'nullable|string',
            'image' => ['nullable', new StringOrFile],
            'image_cover' => ['nullable', new StringOrFile],
            'details' => 'nullable|array',
            'details.*' => [new StringOrFile],
            'category_id' => 'exists:categories,id'
        ]);

        $this->setOrCleanField('image');
        $this->setOrCleanField('image_cover');

        if (request()->has('details')) {
            $path = [];
            foreach (request('details') as $image) {
                if ($image instanceof UploadedFile) {
                    // push to paths array && store to storage
                    $name = $image->store('products/details', 'public');
                    $path[] = $name;
                }
                if (is_string($image)) {
                    $path[] = str_replace(config('app.url') . ':8000/storage/', '', $image);
                }
            }
            $this->validated['details'] = $path;
        }
 
        $this->original->fill($this->validated);
        $this->original->save();

        return response()->json($this->original, 201);
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Delete images if they exist
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }
        if ($product->image_cover) {
            Storage::delete('public/' . $product->image_cover);
        }

        // Delete the product
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
