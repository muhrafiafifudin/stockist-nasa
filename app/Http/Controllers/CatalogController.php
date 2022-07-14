<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function howToShop()
    {
        return view('users.pages.catalog.how-to-shop');
    }

    public function trackPackage()
    {
        return view('users.pages.catalog.track-package');
    }
}
