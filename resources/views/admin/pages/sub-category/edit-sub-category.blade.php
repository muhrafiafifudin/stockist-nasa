@extends('admin.layouts.app')

@section('title')
    Form Sub Kategori
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Sub Kategori</h4>
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
                            <a href="{{ route('admin.sub-kategori.edit', $sub_categories->id) }}">Edit Sub Kategori</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Edit Sub Kategori
                                </div>
                                <div class="card-category">
                                    Mengubah daftar sub kategori sesuai kebutuhan produk.
                                </div>
                            </div>
                            <form action="{{ route('admin.sub-kategori.update', $sub_categories->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="categories_id">Nama Kategori</label>
                                                <select class="form-control" name="categories_id">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $category->id == $sub_categories->categories_id ? ' selected' : '' }}>{{ $category->category }}</option>
                                                    @endforeach
                                                </select>
                                                <small id="categoryText" class="form-text text-muted">Nama kategori untuk identitas
                                                    setiap produk.</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="sub_category">Nama Sub Kategori</label>
                                                <input type="text" class="form-control" id="sub_category" name="sub_category"
                                                    value="{{ $sub_categories->sub_category }}" placeholder="Masukkan Nama Kategori ...">
                                                <small id="categoryText" class="form-text text-muted">Nama sub kategori untuk identitas
                                                    setiap produk.</small>
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
