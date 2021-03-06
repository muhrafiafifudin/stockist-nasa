<?php

namespace App\Http\Controllers;

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
        return view('users.pages.my-account.account-dashboard');
    }

    public function myAccount()
    {
        return view('users.pages.my-account.profile.account-profile');
    }

    public function address()
    {
        $address = User::where('id', Auth::id())->first();
        $address = RajaOngkir::kota()->dariProvinsi($address->provinces_id)->find($address->cities_id);

        return view('users.pages.my-account.address.account-address',compact('address'));
    }

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
}
