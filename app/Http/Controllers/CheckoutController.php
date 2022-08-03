<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use App\Models\Product;
use App\Models\Payment;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Session;
use Midtrans;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkout = Session::all();

        $stores = Store::all()->first();
        $address = RajaOngkir::kota()->dariProvinsi($stores->provinces_id)->find($stores->cities_id);

        $cartItems = Cart::where('users_id', Auth::id())->get();

        return view('users.pages.checkout', compact('checkout', 'address', 'cartItems'));
    }

    public function placeorder(Request $request)
    {
        $transaction = new Transaction();
        $transaction->users_id = Auth::id();
        $transaction->name = $request->input('name');
        $transaction->email = $request->input('email');
        $transaction->provinces_id = $request->input('province');
        $transaction->cities_id = $request->input('regency');
        $transaction->address = $request->input('address');
        $transaction->postcode = $request->input('postcode');
        $transaction->phone_number = $request->input('phone_number');
        $transaction->courier = $request->input('courier');
        $transaction->weight = $request->input('weight');
        $transaction->estimate = $request->input('estimate');
        $transaction->shipping = $request->input('shipping');
        $transaction->subtotal = $request->input('subtotal');
        $transaction->note = $request->input('note');

        // To Calculate the Gross Amount
        $gross_amount = 0;
        $cartItems_total = Cart::where('users_id', Auth::id())->get();

        foreach ($cartItems_total as $data) {
            $gross_amount += $data->products->price * $data->products_qty;
        }

        $transaction->total = $gross_amount + $request->input('shipping');
        $transaction->order_number = $request->input('order_number');
        $transaction->save();

        $cartItems = Cart::where('users_id', Auth::id())->get();
        foreach ($cartItems as $item) {
            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $item->products_id,
                'qty' => $item->products_qty
            ]);

            $product = Product::where('id', $item->products_id)->first();
            $product->qty = $product->qty - $item->products_qty;
            $product->update();
        }

        if (Auth::user()->street_address == NULL) {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->provinces_id = $request->input('province');
            $user->cities_id = $request->input('regency');
            $user->address = $request->input('address');
            $user->postcode = $request->input('postcode');
            $user->phone_number = $request->input('phone_number');
            $user->update();
        }

        $cartItems = Cart::where('users_id', Auth::id())->get();
        Cart::destroy($cartItems);

        return redirect('invoice/' . $request->input('order_number'))->with('success', 'Order Placed Successfully');
    }

    public function invoice($order_number)
    {
        $transactions = Transaction::where('order_number', $order_number)->where('users_id', Auth::id())->first();
        $addresses = RajaOngkir::kota()->dariProvinsi($transactions->provinces_id)->find($transactions->cities_id);

        foreach ($transactions->transactiondetails as $item) {
            $item_details[] = array(
                'id' => $item->products_id,
                'price' => $item->products->price,
                'quantity' => $item->qty,
                'name' => $item->products->name
            );
        }

        $shipping = array(
            'id' => 'shipping',
            'price' => $transactions->shipping,
            'quantity' => 1,
            'name' => 'Biaya Pengiriman'
        );

        $item_details[] = $shipping;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');


        $params = array(
            'transaction_details' => array(
                'order_id' => $transactions->id . '-' . rand(),
                'gross_amount' => $transactions->total,
            ),
            'item_details' => $item_details,
            'customer_details' => array(
                'first_name' => $transactions->name,
                'last_name' => '',
                'email' => $transactions->email,
                'phone' => $transactions->phone_number,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('users.pages.invoice', compact('transactions', 'addresses', 'snapToken'));
    }

    public function paymentPost(Request $request)
    {
        $json = json_decode($request->get('json'));
        $payment = new Payment();
        $payment->order_number = $request->id;
        $payment->order_id = $json->order_id;
        $payment->transaction_id = $json->transaction_id;
        $payment->gross_amount = $json->gross_amount;
        $payment->payment_type = $json->payment_type;
        $payment->status_code = $json->status_code;
        $payment->transaction_time = $json->transaction_time;

        $transaction_status = $json->transaction_status;
        $fraud = $json->fraud_status;

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'challenge'
                $payment->transaction_status = 'pending';
            } else if ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'success'
                $payment->transaction_status = 'paid';
            }
        } else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'failure'
                $payment->transaction_status = 'failed';
            } else if ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'failure'
                $payment->transaction_status = 'failed';
            }
        } else if ($transaction_status == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            $payment->transaction_status = 'failed';
        } else if ($transaction_status == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $payment->transaction_status = 'paid';
        } else if ($transaction_status == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $payment->transaction_status = 'pending';
        } else if ($transaction_status == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $payment->transaction_status = 'failed';
        }

        return $payment->save() ? redirect(url('/'))->with('alert-success', 'Order Berhasil Dibuat') : redirect(url('/'))->with('alert-failed', 'Terjadi Kesalahan');
    }
}
