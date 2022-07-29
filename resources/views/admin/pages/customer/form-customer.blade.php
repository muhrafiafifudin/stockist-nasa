@extends('admin.layouts.app')

@section('title')
    Form Tambah Pengguna
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Pengguna</h4>
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
                            <a href="{{ route('admin.pengguna.index') }}">Pengguna</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pengguna.create') }}">Tambah Penguna</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Pengguna
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar pengguna untuk mengakses halaman web.
                                </div>
                            </div>
                            <form action="{{ route('admin.pengguna.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama pengguna ...">
                                            <small id="nameText" class="form-text text-muted">Nama lengkap identitas user.</small>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email pengguna ...">
                                            <small id="emailText" class="form-text text-muted">Password default : <strong>1234</strong>.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="province">Provinsi</label>
                                            <select class="form-control" name="provinces_id" id="province">
                                                <option selected="selected">Pilih Provinsi</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="regency">Kota / Kabupaten</label>
                                            <select class="form-control" name="cities_id" id="regency">
                                                <option selected="selected">Pilih Kota / Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea class="form-control" name="address" rows="3"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="postcode">Kode Pos</label>
                                            <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Masukkan kodepos pengguna ...">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone_number">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Masukkan nomor telepon pengguna ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.pengguna.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
