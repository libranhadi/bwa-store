<?php

namespace App\Http\Controllers;

use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class DashboardTransactionController extends Controller
{
      public function index()
    {
        return view("pages.dashboard-transaction");
    }
      public function detail(Request $request , $id)
    {
        $transactions = TransactionDetail::with(['transaction.user' , 'product.galleries'])->findOrFail($id);
     
        return view("pages.dashboard-transaction-detail", [
            'transaction' => $transactions
        ]);
    }
  
}
