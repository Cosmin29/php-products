<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        $status = ["published" => "Published", "unpublished" => "Unpublished"];
        return view('products.create', compact('categories','status'));
    }

    public function store(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index');
    }

    public function show($id) {
        $product = Product::with('category', 'orders')->find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
