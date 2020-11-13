<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionDetail;
use App\User;
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
    public function product()
    {
        return view("pages.dashboard-product");
    }
    public function settings()
    {
        return view("pages.dashboard-settings");
    }
    public function account()
    {
        return view("pages.dashboard-account");
    }
    public function transaction()
    {
        return view("pages.dashboard-transaction");
    }
    public function detail()
    {
        return view("pages.dashboard-transaction-detail");
    }
    public function create()
    {
        return view("pages.dashboard-create-product");
    }
    public function show()
    {
        return view("pages.dashboard-product-detail");
    }
}
