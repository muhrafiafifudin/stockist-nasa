<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $articles = Article::all();

        return view('users.pages.dashboard', compact('products', 'articles'));
    }
}
