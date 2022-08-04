<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print PDF</title>
    <style>
        body {
            padding-left: 30px;
            padding-right: 30px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2 class="text-center">STOKIS NASA</h2>
    <h3 class="text-center">Laporan Penjualan</h3>
    <p class="text-center">Dari Tanggal : {{ date('d M Y', strtotime($fromDate)) }} Sampai Tanggal : {{ date('d M Y', strtotime($toDate)) }}</p>

    <table width="100%">
        <tr>
            <th>No.</th>
            <th>Nomor Transaksi</th>
            <th>Tanggal</th>
            <th>Pembeli</th>
            <th>Total</th>
        </tr>
        @php $no=1; @endphp
        @foreach ($transactions as $transaction)
            <tr class="text-center">
                <td>{{ $no++ }}</td>
                <td>{{ $transaction->order_number }}</td>
                <td>{{ date('d M Y', strtotime($transaction->created_at)) }}</td>
                <td>{{ $transaction->name }}</td>
                <td>IDR. {{ number_format($transaction->total, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
