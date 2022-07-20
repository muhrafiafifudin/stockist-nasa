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
        $verified_purchase = Transaction::where('transactions.users_id', Auth::id())
                            ->join('transaction_details', 'transactions.id', 'transaction_details.transactions_id')
                            ->where('transaction_details.products_id', $request->products_id)->get();

        if ($verified_purchase->count() > 0) {
            $data = $request->all();
            Review::create($data);

            return response()->json(['status' => "Terima Kasih Telah Memberikan Penilaian"]);
        } else {
            return response()->json(['status' => "Anda Harus Membeli Produk Terlebih Dahulu"]);
        }
    }
}
