<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function addReview(Request $request)
    {
        $reviews = new Review();
        $reviews->users_id = $request->users_id;
        $reviews->products_id = $request->products_id;
        $reviews->users_review = $request->users_review;
        $reviews->stars_rated = $request->stars_rated;
        $reviews->save();

        // return response()->json(['status' => "Terima Kasih Telah Memberikan Penilaian"]);
        return redirect('akun/pesanan/' . $request->order_number);
    }
}
