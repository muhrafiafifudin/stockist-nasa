<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('users_id', Auth::id())->get();
        return view('users.pages.cart', compact('cartItems'));
    }

    public function addCart(Request $request)
    {
        $products_id = $request->input('products_id');
        $products_qty = $request->input('products_qty');

        if (Auth::check()) {
            $products_check = Product::where('id', $products_id)->first();

            if ($products_check) {

                if (Cart::where('products_id', $products_id)->where('users_id', Auth::id())->exists()) {
                    return response()->json(['status' => $products_check->name . " Sudah Ditambahkan ke Keranjang"]);
                } else {
                    $cartItems = new Cart();
                    $cartItems->users_id = Auth::id();
                    $cartItems->products_id = $products_id;
                    $cartItems->products_qty = $products_qty;
                    $cartItems->save();

                    return response()->json(['status' => $products_check->name . " Ditambahkan ke Keranjang"]);
                }

            }

        } else {
            return response()->json(['status' => "Silahkan Login Terlebih Dahulu"]);
        }
    }

    public function updateCart(Request $request)
    {
        $products_id = $request->input('products_id');
        $products_qty = $request->input('products_qty');

        if (Auth::check()) {

            if (Cart::where('products_id', $products_id)->where('users_id', Auth::id())->exists()) {
                $cart = Cart::where('products_id', $products_id)->where('users_id', Auth::id())->first();
                $cart->products_qty = $products_qty;
                $cart->update();

                return response()->json(['status' => 'Quantity Updated']);
            }
        }
    }

    public function deleteCart(Request $request)
    {
        if (Auth::check()) {
            $products_id = $request->input('products_id');

            if (Cart::where('products_id', $products_id)->where('users_id', Auth::id())->exists()) {
                $cartItems = Cart::where('products_id', $products_id)->where('users_id', Auth::id())->first();
                $cartItems->delete();

                return response()->json(['status' => 'Produk Berhasil Dihapus !!']);
            }

        } else {
            return response()->json(['status' => "Silahkan Login Terlebih Dahulu"]);
        }
    }

    public function getProvince()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . env('RAJAONGKIR_API_KEY')
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $arrayResponse = json_decode($response, true);
            $provinces = $arrayResponse['rajaongkir']['results'];

            echo "<option>Pilih Provinsi</option>";

            foreach ($provinces as $province) {
                echo "<option value='" . $province['province_id'] . "' >" . $province['province'] . "</option>";
            }
        }
    }

    public function getCity($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . env('RAJAONGKIR_API_KEY')
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $arrayResponse = json_decode($response, true);
            $cities = $arrayResponse['rajaongkir']['results'];

            echo "<option>Pilih Kota / Kabupaten</option>";

            foreach ($cities as $city) {
                echo "<option value='" . $city['city_id'] . "' >" . $city['city_name'] . "</option>";
            }
        }
    }

    public function getCourier(Request $request)
    {
        if ($request) {
            echo '<option value="jne" name="JNE">JNE</option>';
            echo '<option value="tiki" name="TIKI">TIKI</option>';
            echo '<option value="pos" name="POS Indonesia">POS Indonesia</option>';
        }
    }

    public function getPackage(Request $request)
    {
        $getLocation = array(
            'origin'        => 54,     // ID kota/kabupaten asal
            'destination'   => $request->city_id,      // ID kota/kabupaten tujuan
            'weight'        => $request->weight,    // berat barang dalam gram
            'courier'       => $request->courier_id,    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $getLocation['origin'] . "&destination=" . $getLocation['destination'] . "&weight=" . $getLocation['weight'] . "&courier=" . $getLocation['courier'] . "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: " . env('RAJAONGKIR_API_KEY')
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $arrayResponse = json_decode($response, true);
            $packages = $arrayResponse['rajaongkir']['results'][0]['costs'];

            foreach ($packages as $package) {
                echo "<option value='" . $package['service'] . "' ongkir='" . $package['cost'][0]['value'] . "' estimasi='" . $package['cost'][0]['etd'] . "'>";
                echo $package['service'] . " | IDR " . $package['cost'][0]['value'];
                echo "</option>";
            }
        }
    }

    public function getEstimate(Request $request)
    {
        echo $request;
    }
}
