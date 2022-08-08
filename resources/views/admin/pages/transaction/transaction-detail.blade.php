@extends('admin.layouts.app')

@section('title')
    Detail Transaksi
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h5 class="page-title">Detail Transaksi</h5>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Transaksi</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Detail Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Detail Transaksi
                                </div>
                                <div class="card-category">
                                    Menampilkan detail transaksi.
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="category">Nomor Transaksi :</label>
                                                <h5 class="fw-bold">{{ $transactions->order_number }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="category">Email Pelanggan :</label>
                                                <h5 class="fw-bold">{{ $transactions->email }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="category">Nama Lengkap :</label>
                                                <h5 class="fw-bold">{{ $transactions->name }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="category">Nomor Resi :</label>
                                                <h5 class="fw-bold">{{ $transactions->resi !== NULL ? $transactions->resi : 'Menunggu pengiriman' }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="category">Kurir :</label>
                                                <h5 class="fw-bold">{{ strtoupper($transactions->courier) }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="category">Estimasi :</label>
                                                <h5 class="fw-bold">{{ $transactions->estimate }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php $no = 1 @endphp
                                            @foreach ($transaction_details as $transaction_detail)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $transaction_detail->products->name }}</td>
                                                    <td>Rp. {{ number_format($transaction_detail->products->price, 2, ',', '.') }}</td>
                                                    <td>{{ $transaction_detail->qty }}</td>
                                                    <td>Rp. {{ number_format($transaction_detail->products->price * $transaction_detail->qty, 2, ',', '.') }}</td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td colspan="3"></td>
                                                <td>Subtotal</td>
                                                <td>Rp. {{ number_format($transactions->subtotal, 2, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td>Biaya Pengiriman</td>
                                                <td>Rp. {{ number_format($transactions->shipping, 2, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-bold">Total</td>
                                                <td class="fw-bold">Rp. {{ number_format($transactions->total, 2, ',', '.') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
