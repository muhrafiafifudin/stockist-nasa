<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $articles = Article::all();
        $users = Auth::user();

        return view('users.pages.dashboard', compact('products', 'articles', 'users'));
    }
}
