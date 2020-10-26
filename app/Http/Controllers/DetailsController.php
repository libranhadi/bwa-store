<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;

class DetailsController extends Controller
{
    public function index(Request $request, $id)
    {
        $product = Product::with(['galleries', 'user'])->where('slug', $id)->firstOrFail();

        return view('pages.details', [
            'product' => $product
        ]);
    }
    public function add(Request $request, $id){
        $attr = [
            'products_id' => $id,
            'users_id' => Auth::user()->id,
        ];
        Cart::create($attr);
        return redirect()->route('cart');
    }
}
