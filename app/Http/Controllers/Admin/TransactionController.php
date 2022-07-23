<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transactions')
            ->rightJoin('payments', 'transactions.order_number', '=', 'payments.order_number')
            ->where('payments.transaction_status', 'paid')
            ->get();

        return view('admin.pages.transaction.transaction', compact('transactions'));
    }

    public function updateProcess($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 1;
        $transactions->update();

        return redirect()->route('admin.transaksi.index');
    }

    public function updateDelivery(Request $request, $id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 2;
        $transactions->resi = $request->resi;
        $transactions->update();

        return redirect()->route('admin.transaksi.index');
    }
}
