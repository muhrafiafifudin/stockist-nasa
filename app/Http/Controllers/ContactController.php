<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class ContactController extends Controller
{
    public function index()
    {
        $stores = Store::all()->first();
        $address = RajaOngkir::kota()->dariProvinsi($stores->provinces_id)->find($stores->cities_id);

        return view('users.pages.contact-us', compact('stores', 'address'));
    }
}
