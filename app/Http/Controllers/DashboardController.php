<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Category;
use App\TransactionDetail;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        //menampilkan produk yang telah dibeli berdasarkan user yang login
        $transactions = TransactionDetail::with([ 'transaction.user' , 'product.galleries'])
        ->whereHas('product', function ($product) {
            $product->where('users_id', Auth::user()->id );
        });

        //menjumlahkan penjualan berdasarkan harga perbarang selain menggunakan
        $revenue = $transactions->get()->reduce(function($carry, $item){
            return $carry + $item->price;
        });

        //user berdasarkan transaksi 
        $customer = User::count();
        return view("pages.dashboard", [
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->get(),
            'revenue' => $revenue,
            'customer' =>$customer
        ]);
    }
  
  
    
   
   
}
