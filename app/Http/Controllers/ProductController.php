<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function show($id)
    {
        return response()->json(Product::findOrFail($id));
    }

    public function expensive()
    {
        return response()->json(
            Product::where('price', '>', 100)->get()
        );
    }

    public function electronics()
    {
        return response()->json(
            Product::where('category_id', 1)->get()
        );
    }

    public function categoryProducts()
    {
        $category = Category::findOrFail(1);

        return response()->json($category->products);
    }

    public function productCategory()
    {
        $product = Product::findOrFail(1);

        return response()->json($product->category);
    }
}