<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function howOrderNasa()
    {
        return view('users.pages.catalog.how-order-nasa');
    }

    public function trackPackage()
    {
        return view('users.pages.catalog.track-package');
    }
}
