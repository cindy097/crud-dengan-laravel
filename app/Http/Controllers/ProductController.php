<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Menambahkan impor untuk model Product

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();  // Menggunakan model Product
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // cari produk berdasarkan id
        $product = Product::findOrFail($id);
        // mengisi properti satu per satu
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;

        // simpan perubahan
        $product->save();
        return redirect()->route('products.index')->with('succes', 'Product updated successfully!');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
