@extends('admin.layouts.app')

@section('title')
    Form Edit Profil Toko
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Profil Toko</h4>
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
                            <a href="{{ route('admin.profil-toko.index') }}">Profil Toko</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.profil-toko.edit', $stores->id) }}">Edit Profil Toko</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Edit Profil Toko
                                </div>
                                <div class="card-category">
                                    Mengubah data informasi mengenai profil toko.
                                </div>
                            </div>
                            <form action="{{ route('admin.profil-toko.update', $stores->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="name">Nama Toko</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ $stores->name }}" placeholder="Masukkan nama toko ...">
                                            <small id="nameText" class="form-text text-muted">Nama toko untuk identitas profil toko.</small>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" value="{{ $stores->email }}" placeholder="Masukkan email toko ...">
                                            <small id="emailText" class="form-text text-muted">Email toko untuk menguhubungi admin toko.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="province">Provinsi</label>
                                            <select class="form-control" name="provinces_id" id="province">
                                                <option selected="selected" value="">Pilih Provinsi</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="regency">Kota / Kabupaten</label>
                                            <select class="form-control" name="cities_id" id="regency">
                                                <option selected="selected" value="">Pilih Kota / Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea class="form-control" name="address" rows="3">{{ $stores->address }}</textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="postcode">Kode Pos</label>
                                            <input type="text" class="form-control" name="postcode" id="postcode" value="{{ $stores->postcode }}" placeholder="Masukkan kodepos toko ...">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone_number">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $stores->phone_number }}" placeholder="Masukkan nomor telepon toko ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.profil-toko.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
