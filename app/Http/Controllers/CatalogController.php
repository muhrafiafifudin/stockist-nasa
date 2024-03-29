<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function product()
    {
        $products = Product::all();
        $users = Auth::user();

        return view('users.pages.catalog.product', compact('products','users'));
    }

    public function productDetail($productSlug)
    {
        if (Product::where('slug', $productSlug)->exists()) {
            $all_products = Product::all();
            $products = Product::where('slug', $productSlug)->first();
            $categorySlug = $products->categories->slug;
            $users = Auth::user();
            // Review
            $reviews = Review::where('products_id', $products->id)->get();
            // Rating
            $rating_sum = Review::where('products_id', $products->id)->sum('stars_rated');
            $users_rating = Review::where('products_id', $products->id)->where('users_id', Auth::id())->get();

            if ($reviews->count() > 0) {
                $rating_value = $rating_sum / $reviews->count();
            } else {
                $rating_value = 0;
            }

            return view('users.pages.catalog.product-detail', compact('products', 'reviews', 'rating_value', 'users_rating', 'all_products', 'users'));
        } else {
            return redirect('/katalog/produk-nasa')->with('view', 'The link was broken');
        }
    }

    public function categoryNasa($categorySlug)
    {
        $productCategories = Category::where('slug', $categorySlug)->first();
        $users = Auth::user();

        if (Product::where('categories_id', $productCategories->id)->exists()) {
            $products = Product::where('categories_id', $productCategories->id)->get();

            return view('users.pages.catalog.product-category', compact('products', 'productCategories', 'users'));
        } else {
            return redirect('/katalog/produk-nasa')->with('view', 'The link was broken');
        }
    }

    public function subCategoryNasa($categorySlug, $subCategorySlug)
    {
        $productCategories = Category::where('slug', $categorySlug)->first();
        $productSubCategories = SubCategory::where('slug', $subCategorySlug)->first();
        $users = Auth::user();

        if (Product::where('categories_id', $productCategories->id)->where('sub_categories_id', $productSubCategories->id)->exists()) {
            $products = Product::where('categories_id', $productCategories->id)->where('sub_categories_id', $productSubCategories->id)->get();

            return view('users.pages.catalog.product-subcategory', compact('products', 'productCategories', 'productSubCategories', 'users'));
        } else {
            return redirect('/katalog/produk-nasa')->with('view', 'The link was broken');
        }
    }

    public function priceList()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('users.pages.catalog.price-list', compact('categories', 'products'));
    }

    public function howOrderNasa()
    {
        return view('users.pages.catalog.how-order');
    }

    public function trackPackage()
    {
        return view('users.pages.catalog.track-package');
    }
}
