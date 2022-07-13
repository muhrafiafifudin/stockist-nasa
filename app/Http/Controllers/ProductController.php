<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();

        return view('users.pages.product.product', compact('products'));
    }

    public function productDetail($categorySlug, $productSlug)
    {
        if (Product::where('slug', $productSlug)->exists()) {
            $products = Product::where('slug', $productSlug)->first();
            $categorySlug = $products->categories->slug;

            return view('users.pages.product.product-detail', compact('products'));
        } else {
            return redirect('/product')->with('view', 'The link was broken');
        }
    }
}
