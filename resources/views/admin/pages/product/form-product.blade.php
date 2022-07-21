@extends('admin.layouts.app')

@section('title')
    Form Kategori
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Produk</h4>
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
                            <a href="{{ route('admin.produk.index') }}">Produk</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produk.create') }}">Tambah Produk</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Produk
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar produk sesuai yang tertera pada website.
                                </div>
                            </div>
                            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Produk ...">
                                        <small id="categoryText" class="form-text text-muted">Nama produk untuk identitas setiap item.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div></div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="images" />
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="small_description">Deskripsi Singkat</label>
                                        <textarea class="form-control" name="small_description" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control" name="description" rows="15" id="markdown-input"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="categories_id">Kategori
                                        <span class="text-danger">*</span></label>
                                        <select class="form-control" name="categories_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga
                                        <span class="text-danger">*</span></label>
                                        <input type="number" name="price" class="form-control" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Berat
                                        <span class="text-danger">*</span></label>
                                        <input type="number" name="weight" class="form-control" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Stok
                                        <span class="text-danger">*</span></label>
                                        <input type="number" name="qty" class="form-control" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug
                                        <span class="text-danger">*</span></label>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter email" />
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

