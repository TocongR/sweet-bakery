<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()
                            ->filter(request()->only(['search', 'category', 'status']))
                            ->paginate(5)
                            ->withQueryString();

        return view('admin.products.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'description' => "required",
            'isFeatured' => 'boolean',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
        ], [
            'category_id.required' => 'Please select a category'
        ]);

        $imagePath = null;
        if ($request->image && $request->hasFile('image')) {
            $imagePath = Storage::disk('public')->put('/images/products', $request->image);
        }

        Product::create([
            ...$fields,
            'image' => $imagePath
        ]);


        return redirect()->route('products.index')->with('success' ,'Product successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $fields = $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'description' => "required",
            'isFeatured' => 'boolean',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
        ], [
            'category_id.required' => 'Please select a category'
        ]);
        
        $imagePath = $product->image ?? null;
        if ($request->image && $request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $imagePath = Storage::disk('public')->put('images/products', $request->image);
        }

        $product->update([
            ...$fields,
            'image' => $imagePath
        ]);

        return redirect()->route('products.index')->with('success', 'Product successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product successfully deleted.');
    }
}
