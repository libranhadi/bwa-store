<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function index()
    {
        $cart = Cart::with(['product.galleries' , 'users'])->where('users_id', Auth::user()->id)->get();
     return view('pages.cart', [
         'carts'=> $cart
     ])    ;
    }

    public function delete($id){
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->back();
    }

    
    public function success()
    {
        return view("pages.success");
    }
}
