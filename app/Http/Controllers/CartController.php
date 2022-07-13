<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('users_id', Auth::id())->get();
        return view('users.pages.cart', compact('cartItems'));
    }

    public function addCart(Request $request)
    {
        $products_id = $request->input('products_id');
        $products_qty = $request->input('products_qty');

        if (Auth::check()) {
            $products_check = Product::where('id', $products_id)->first();

            if ($products_check) {

                if (Cart::where('products_id', $products_id)->where('users_id', Auth::id())->exists()) {
                    return response()->json(['status' => $products_check->name . " Sudah Ditambahkan ke Keranjang"]);
                } else {
                    $cartItems = new Cart();
                    $cartItems->users_id = Auth::id();
                    $cartItems->products_id = $products_id;
                    $cartItems->products_qty = $products_qty;
                    $cartItems->save();

                    return response()->json(['status' => $products_check->name . " Ditambahkan ke Keranjang"]);
                }

            }

        } else {
            return response()->json(['status' => "Silahkan Login Terlebih Dahulu"]);
        }
    }

    public function updateCart()
    {

    }

    public function deleteCart(Request $request)
    {
        if (Auth::check()) {
            $products_id = $request->input('products_id');

            if (Cart::where('products_id', $products_id)->where('users_id', Auth::id())->exists()) {
                $cartItems = Cart::where('products_id', $products_id)->where('users_id', Auth::id())->first();
                $cartItems->delete();

                return response()->json(['status' => 'Produk Berhasil Dihapus !!']);
            }

        } else {
            return response()->json(['status' => "Silahkan Login Terlebih Dahulu"]);
        }
    }
}
