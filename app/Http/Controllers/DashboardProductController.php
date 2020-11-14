<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
      public function product()
    {
        $products = Product::with(['user' , 'category' ,  'galleries'])->where('users_id', Auth::user()->id)->get();
       
        return view("pages.dashboard-product", [
            'products' => $products
        ]);
    }

     public function create()
    {
        
        return view("pages.dashboard-create-product" ,   [
            'product' => new Product(),
            'user' => User::get(),
            'category' => Category::get()
            
        ]);
    }
     public function show()
    {
        return view("pages.dashboard-product-detail");
    }
}
