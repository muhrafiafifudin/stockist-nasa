@extends('admin.layouts.app')

@section('title')
    Form Sub Kategori
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Sub Kategori</h4>
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
                            <a href="{{ route('admin.sub-kategori.index') }}">Sub Kategori</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sub-kategori.create') }}">Tambah Sub Kategori</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Sub Kategori
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar sub kategori sesuai kebutuhan produk.
                                </div>
                            </div>
                            <form action="{{ route('admin.sub-kategori.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Nama Kategori</label>
                                                <select class="form-control" name="categories_id" required>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                    @endforeach
                                                </select>
                                                <small id="categoryText" class="form-text text-muted">Nama kategori untuk identitas
                                                    setiap produk.</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="category">Nama Sub Kategori</label>
                                                <input type="text" class="form-control" id="sub_category" name="sub_category" placeholder="Masukkan Nama Kategori ..." required>
                                                <small id="categoryText" class="form-text text-muted">Nama sub kategori untuk identitas setiap produk.</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="category">Slug Sub Kategori</label>
                                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Masukkan Slug Kategori ..." required>
                                                <small id="categoryText" class="form-text text-muted">Slug sub kategori untuk identitas setiap produk.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.sub-kategori.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
