<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $products = Product::count();
        $transactions = DB::table('transactions')
            ->rightJoin('payments', 'transactions.order_number', '=', 'payments.order_number')
            ->where('payments.transaction_status', 'paid')
            ->get();

        $payments = 0;

        foreach ($transactions as $transaction) {
            $payments += $transaction->gross_amount;
        }

        $incomes = $payments;

        return view('admin.pages.dashboard', compact('users', 'products', 'incomes'));
    }
}
