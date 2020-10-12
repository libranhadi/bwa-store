<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category , Product};
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::take(6)->get();
        $products = Product::with(['gallery'])->take(8)->latest()->get();
        return view('pages.index', [
            'categories' => $categories,
            'product' => $products
        ]);
    }
}
