@extends('admin.layouts.app')

@section('title')
    Riwayat Transaksi
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Riwayat Transaksi</h4>
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
                            <a href="{{ route('admin.transaksi.history') }}">Riwayat Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Riwayat Transaksi

                                        <div class="card-category">
                                            Menampilkan semua riwayat transaksi yang sudah selesai.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nomor Transaksi</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Pelanggan</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transaction->order_number }}</td>
                                                <td>{{ $transaction->created_at }}</td>
                                                <td>{{ $transaction->users->name }}</td>
                                                <td>{{ $transaction->total }}</td>
                                                <td>
                                                    <a href="{{ url('admin/detail-transaksi', $transaction->id) }}" class="btn btn-warning">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
