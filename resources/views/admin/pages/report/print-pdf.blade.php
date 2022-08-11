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
    <table width="100%" style="border: none">
        <tr style="border: none">
            <td width="30%" style="border: none">
                <img src="users/img/logo-nasa.png" alt="navbar brand" width="300px">
            </td>
            <td width="70%" style="border: none; line-height:10px">
                <h2 class="text-center">STOKIS NASA</h2>
                <p class="text-center">Sidomulyo, Kel. Glagah Wangi, Kec. Polanharjo, 57456. Klaten, Jawa Tengah</p>
            </td>
        </tr>
    </table>

    <h3 class="text-center" style="line-height: 10px; margin-top: 5rem">Laporan Penjualan</h3>
    <p class="text-center" style="line-height: 10px; margin-bottom: 3rem">Dari Tanggal : {{ date('d M Y', strtotime($fromDate)) }} Sampai Tanggal : {{ date('d M Y', strtotime($toDate)) }}</p>

    <table width="100%">
        <tr>
            <th>No.</th>
            <th>Nomor Transaksi</th>
            <th>Tanggal</th>
            <th>Pembeli</th>
            <th>Total</th>
        </tr>
        @php $no=1; @endphp
        @forelse ($transactions as $transaction)
            <tr class="text-center">
                <td>{{ $no++ }}</td>
                <td>{{ $transaction->order_number }}</td>
                <td>{{ date('d M Y', strtotime($transaction->created_at)) }}</td>
                <td>{{ $transaction->name }}</td>
                <td>IDR. {{ number_format($transaction->total, 2, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="5"><strong>Data Kosong</strong></td>
            </tr>
        @endforelse
    </table>

    <table width="100%" style="border: none; margin-top: 8rem">
        <tr style="border: none">
            <td width="25%" style="border: none">
            </td>
            <td width="25%" style="border: none">
            </td>
            <td width="25%" style="border: none">
            </td>
            <td width="25%" style="border: none; line-height:10px">
                <h3 class="text-center">Owner,</h3>
                <br><br><br><br>
                <p class="text-center">Anggita Prasasti</p>
            </td>
        </tr>
    </table>
</body>

</html>
