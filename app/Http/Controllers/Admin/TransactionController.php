<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;

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

        $transactions = Transaction::whereBetween('created_at', [$fromDate, $toDate])->get();

        $pdf = PDF::loadView('admin.pages.report.print-pdf', compact('transactions', 'fromDate', 'toDate'))->setPaper('a4', 'landscape');

        return $pdf->download('Stokis NASA.pdf');
    }
}
