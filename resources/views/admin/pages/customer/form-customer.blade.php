@extends('admin.layouts.app')

@section('title')
    Form Tambah Pelanggan
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Pelanggan</h4>
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
                            <a href="{{ route('admin.pelanggan.index') }}">Pelanggan</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pelanggan.create') }}">Tambah Penguna</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Pelanggan
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar pelanggan untuk mengakses halaman web.
                                </div>
                            </div>
                            <form action="{{ route('admin.pelanggan.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama pelanggan ..." required>
                                            <small id="nameText" class="form-text text-muted">Nama lengkap identitas user.</small>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email pelanggan ..." required>
                                            <small id="emailText" class="form-text text-muted">Password default : <strong>1234</strong>.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="province">Provinsi</label>
                                            <select class="form-control" name="provinces_id" id="province" required>
                                                <option selected="selected">Pilih Provinsi</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="regency">Kota / Kabupaten</label>
                                            <select class="form-control" name="cities_id" id="regency" required>
                                                <option selected="selected">Pilih Kota / Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea class="form-control" name="address" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="postcode">Kode Pos</label>
                                            <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Masukkan kodepos pelanggan ..." required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone_number">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Masukkan nomor telepon pelanggan ..." required>
                                        </div>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="is_member" type="checkbox" value="1">
                                                <span class="form-check-sign">Ya, termasuk member</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
