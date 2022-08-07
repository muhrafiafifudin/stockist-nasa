<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function newProduct()
    {
        $products = Product::orderBy('created_at', 'asc')->limit(5)->get();

        return view('users.pages.product.new-product', compact('products'));
    }

    public function bestProduct()
    {
        $products = Product::all();

        return view('users.pages.product.best-product', compact('products'));
    }

    public function selectionProduct()
    {
        $products = Product::where('trending', 1)->get();

        return view('users.pages.product.selection-product', compact('products'));
    }
}
