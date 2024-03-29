@extends('admin.layouts.app')

@section('title')
    Form Kategori
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Kategori</h4>
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
                            <a href="#">Kategori</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kategori.index') }}">Kategori</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kategori.create') }}">Tambah Kategori</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Kategori
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar kategori sesuai kebutuhan produk.
                                </div>
                            </div>
                            <form action="{{ route('admin.kategori.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category">Nama Kategori</label>
                                        <input type="text" class="form-control" name="category" id="category" placeholder="Masukkan Nama Kategori ..." required>
                                        <small id="categoryText" class="form-text text-muted">Nama kategori untuk identitas setiap produk.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Masukkan Slug Kategori ..." required>
                                        <small id="categoryText" class="form-text text-muted">Slug untuk identitas setiap produk.</small>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.kategori.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
