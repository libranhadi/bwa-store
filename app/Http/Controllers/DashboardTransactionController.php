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
        $transaction = TransactionDetail::with(['transaction.user' , 'product.galleries'])->
        whereHas('product', function ($product){
            $product->where('users_id', Auth::user()->id);
        })->get();
        $buying = TransactionDetail::with(['transaction.user' , 'product.galleries'])->
        whereHas('transaction', function ($transaction){
            $transaction->where('users_id' , Auth::user()->id);
        })->get();

        return view("pages.dashboard-transaction", [
            'transactions'=> $transaction,
            'buying'=> $buying
        ]);
    }
      public function detail(Request $request , $id)
    {
        $transactions = TransactionDetail::with(['transaction.user' , 'product.galleries'])->findOrFail($id);
     
        return view("pages.dashboard-transaction-detail", [
            'transaction' => $transactions
        ]);
    }

    public function update(Request $request, $id){
        $attr = $request->all();
        $update =  TransactionDetail::findOrFail($id);

        $update->update($attr);
        return redirect()->route('dashboard');
    }
  
}
