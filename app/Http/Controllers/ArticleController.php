<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        $articles = Article::all();

        return view('users.pages.article.article', compact('articles'));
    }

    public function articleDetail($slug)
    {
        if (Article::where('slug', $slug)->exists()) {
            $articles = Article::where('slug', $slug)->first();

            return view('users.pages.article.article-detail', compact('articles'));
        } else {
            return redirect('/artikel', with('view', 'Halaman detail artikel tidak ditemukan!!'));
        }

    }
}
