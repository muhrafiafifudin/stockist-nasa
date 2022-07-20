<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

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
            // Review
            $reviews = Review::where('products_id', $products->id)->get();
            // Rating
            $rating_sum = Review::where('products_id', $products->id)->sum('stars_rated');
            $users_rating = Review::where('products_id', $products->id)->where('users_id', Auth::id())->get();

            if ($reviews->count() > 0) {
                $rating_value = $rating_sum/$reviews->count();
            } else {
                $rating_value = 0;
            }

            return view('users.pages.product.product-detail', compact('products', 'reviews', 'rating_value', 'users_rating'));
        } else {
            return redirect('/produk')->with('view', 'The link was broken');
        }
    }
}
