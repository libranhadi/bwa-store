<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Request\Admin\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->latest()->paginate(8);
        return view("pages.category", [
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function show(Request $request, $slug){

        $categories= Category::all();
        $category = Category::where('slug' , $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(32);
        return view('pages.category', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
