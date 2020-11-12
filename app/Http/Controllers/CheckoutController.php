<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Cart;
use App\Transaction;
use App\TransactionDetail;
use App\User;
use Exception;

use Midtrans\Snap;
use Midtrans\Config;

class CheckoutController extends Controller
{
    public function process(Request $request){

        $user= Auth::user();

        $user->update($request->except('total_price'));

        $code = 'STORE' . mt_rand(00000, 99999);
        $carts = Cart::with(['product', 'users'])->where('users_id', Auth::user()->id)->get();

        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'insurance_price' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'code' => $code
        ]);

        foreach ($carts as $cart) {
            $trd = 'TRD'. mt_rand(00000, 99999);

            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => 10,
                'code' => $trd,

            ]);
        }

        Cart::with(['product' , 'users'])->where('users_id', Auth::user()->id)->delete();

        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProducttion');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $midtrans = array(
    'transaction_details' => array(
        'order_id' => $code,
        'gross_amount' => (int) $request->total_price,
    ),
    'customer_details' => array(
        'first_name' => Auth::user()->name,
        'email' => Auth::user()->email,
        'phone' => Auth::user()->phone_number,
    ),
    'enabled_payments' => array(
        'permata_va', "gopay" , "indomaret" , 'bri_va', 'bca_va'
    ) ,
        'vtweb' => [],

    );

            try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
            }
            catch (Exception $e) {
            echo $e->getMessage();
            }
    }
}
