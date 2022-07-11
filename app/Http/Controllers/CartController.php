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
                    return response()->json(['status' => $products_check->name . " Already Added to Cart"]);
                } else {
                    $cartItems = new Cart();
                    $cartItems->users_id = Auth::id();
                    $cartItems->products_id = $products_id;
                    $cartItems->products_qty = $products_qty;
                    $cartItems->save();

                    return response()->json(['status' => $products_check->name . " Added to Cart"]);
                }

            }

        } else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function updateCart()
    {

    }

    public function deleteCart()
    {

    }
}
