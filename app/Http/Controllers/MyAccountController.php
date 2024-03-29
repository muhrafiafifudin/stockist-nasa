<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Codec\OrderedTimeCodec;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class MyAccountController extends Controller
{
    public function dashboard()
    {
        $users = Auth::user();

        return view('users.pages.my-account.account-dashboard', compact('users'));
    }


    // Start My Account - User Profile
    public function myAccount()
    {
        $address = User::where('id', Auth::id())->first();
        $addresses = RajaOngkir::kota()->dariProvinsi($address->provinces_id)->find($address->cities_id);

        return view('users.pages.my-account.profile.account-profile', compact('address', 'addresses'));
    }

    public function editMyAccount($id)
    {
        $users = User::findOrFail($id);

        return view('users.pages.my-account.profile.edit-account-profile', compact('users'));
    }

    public function updateMyAccount(Request $request, $id)
    {
        $data = $request->all();

        $users = User::findOrFail($id);
        if ($request->provinces_id == NULL) {
            $data['provinces_id'] = $request->provinces_id;
        }
        if ($request->cities_id == NULL) {
            $data['cities_id'] = $request->cities_id;
        }
        $users->update($data);

        return redirect('akun/profil');
    }
    // End My Account - User Profile


    // Start My Account - Order / Transaction
    public function order()
    {
        $orders = Transaction::where('users_id', Auth::id())->get();

        return view('users.pages.my-account.order.account-order', compact('orders'));
    }

    public function orderDetail($order_number)
    {
        $orders = Transaction::where('order_number', $order_number)->where('users_id', Auth::id())->first();
        $order_details = TransactionDetail::where('transactions_id', $orders->id)->get();
        // Get Province & City Shipping Address
        $address_shipping = RajaOngkir::kota()->dariProvinsi($orders->provinces_id)->find($orders->cities_id);
        // Get Province & City Billing Address
        $address_billing = RajaOngkir::kota()->dariProvinsi($orders->users->provinces_id)->find($orders->users->cities_id);

        return view('users.pages.my-account.order.account-order-detail', compact('orders', 'order_details','address_shipping', 'address_billing'));
    }

    public function updateFinish(Request $request, $id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 3;
        $transactions->update();

        return redirect('akun/pesanan/' . $request->order_number);
    }

    public function addCartAgain(Request $request)
    {
        foreach ($request->input('products_id') as $product_id) {

            foreach ($request->input('products_qty') as $product_qty) {}

                if (Cart::where('products_id', $product_id)->where('users_id', Auth::id())->exists()) {
                    $cartItems = Cart::where('products_id', $product_id)->where('users_id', Auth::id())->first();
                    $cartItems->products_qty += $product_qty;
                    $cartItems->update();
                } else {
                    $cartItems = new Cart();
                    $cartItems->users_id = Auth::id();
                    $cartItems->products_id = $product_id;
                    $cartItems->products_qty = $product_qty;
                    $cartItems->save();
                }
        }

        return redirect('/keranjang');
    }
    // End My Account - Order / Transaction
}
