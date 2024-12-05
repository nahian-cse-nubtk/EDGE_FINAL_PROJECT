<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show the list of products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the product creation form
    public function create()
    {
        return view('products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Create a new product
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        // Redirect to product list 
        return redirect('/products');
    }

    // Show the product edit form
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update the product
    public function update(Request $request, Product $product)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Update the product
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        // Redirect to product list 
        return redirect('/products');
    }

    // Delete the product
    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        // Redirect to product list 
        return redirect('/products');
    }
}
