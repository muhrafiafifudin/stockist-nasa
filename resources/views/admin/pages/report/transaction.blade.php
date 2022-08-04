@extends('admin.layouts.app')

@section('title')
    Laporan | Transaksi
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Laporan Transaksi</h4>
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
                            <a href="#">Laporan</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kategori.index') }}">Laporan Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Laporan Transaksi

                                        <div class="card-category">
                                            Menampilkan semua data laporan transaksi berdasarkan tanggal.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fromDate">Dari Tanggal</label>
                                        <input type="date" class="form-control" name="fromDate" id="fromDate" >
                                        <small id="categoryText" class="form-text text-muted">Masukkan tanggal awal.</small>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="toDate">Sampai Tanggal</label>
                                        <input type="date" class="form-control" name="toDate" id="toDate" >
                                        <small id="categoryText" class="form-text text-muted">masukkan tanggal akhir.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <a href="" onclick="this.href='/admin/print-pdf/' + document.getElementById('fromDate').value + '/' + document.getElementById('toDate').value" target="_blank" class="btn btn-success">Cetak PDF</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
