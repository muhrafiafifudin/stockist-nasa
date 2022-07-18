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
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Session;

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

        return view('users.pages.invoice', compact('transactions', 'addresses'));
    }
}
