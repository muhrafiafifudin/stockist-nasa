<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function howOrderNasa()
    {
        return view('users.pages.catalog.how-order');
    }

    public function trackPackage()
    {
        return view('users.pages.catalog.track-package');
    }

    public function priceList()
    {
        return view('users.pages.catalog.price-list');
    }
}
