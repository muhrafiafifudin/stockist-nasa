<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all()->sortByDesc('created_at');

        // $transactions = DB::table('transactions')
        //     ->rightJoin('payments', 'transactions.order_number', '=', 'payments.order_number')
        //     ->where('payments.transaction_status', 'paid')
        //     ->get();

        return view('admin.pages.transaction.transaction', compact('transactions'));
    }

    public function transactionHistory()
    {
        $transactions = Transaction::where('process', 3)->orderBy('created_at', 'asc')->get();

        return view('admin.pages.transaction.transaction-history', compact('transactions'));
    }

    public function transactionDetail($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transaction_details = TransactionDetail::where('transactions_id', $id)->get();

        return view('admin.pages.transaction.transaction-detail', compact('transactions', 'transaction_details'));
    }

    public function updateProcess($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 1;
        $transactions->update();

        return redirect()->route('admin.transaksi.index');
    }

    public function updateDelivery($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactions->process = 2;
        $transactions->resi = rand(0000000000, 9999999999);
        $transactions->update();

        return redirect()->route('admin.transaksi.index');
    }

    public function reportTransaction()
    {
        return view('admin.pages.report.transaction');
    }

    public function printPdf($fromDate, $toDate)
    {
        $fromDate = $fromDate;
        $toDate = $toDate;

        // $transactions = Transaction::whereBetween('created_at', [$fromDate, $toDate])->get();

        $transactions = Transaction::whereDate('created_at', '>=', $fromDate)
                    ->whereDate('created_at', '<=', $toDate)
                    ->get();

        $pdf = PDF::loadView('admin.pages.report.print-pdf', compact('transactions', 'fromDate', 'toDate'))->setPaper('a4', 'landscape');

        return $pdf->download('Stokis NASA.pdf');
    }
}
