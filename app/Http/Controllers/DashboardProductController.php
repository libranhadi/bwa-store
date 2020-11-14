<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\{Product , User, Category, ProductGallery};
use Illuminate\Support\Str;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Storage;


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
        $category = Category::all();
        return view("pages.dashboard-create-product" ,   [
            'category' => $category
            
        ]);
    }
    public function store(ProductRequest $request){
        $attr = $request->all();
        $attr['slug'] = Str::slug($request->name);
        $product = Product::create($attr);
        //kenapa di jadiin array ? karena dipisah dengan product. dan pada db product gallery mempunyai products_id yang harus di isi
        $gallery = [
            'products_id' => $product->id,
            'photo' => $request->file('photo')->store('assets/products', 'public'),
        ];

        ProductGallery::create($gallery);

        return redirect()->route('dashboard-product');
    }

     public function show()
    {
        return view("pages.dashboard-product-detail");
    }
}
