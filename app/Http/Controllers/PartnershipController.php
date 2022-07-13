<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function opportunities()
    {
        return view('users.pages.partnership.business-opportunities');
    }

    public function registrationForm()
    {
        return view('users.pages.partnership.registration-form');
    }
}
