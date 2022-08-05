@extends('admin.layouts.app')

@section('title')
    Form Tambah Produk
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
                                        <label for="product_code">Kode Produk</label>
                                        <input type="text" class="form-control" name="product_code" placeholder="Masukkan Kode Produk ..." required>
                                        <small id="product_code" class="form-text text-muted">Kode produk untuk identitas setiap item.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Produk ..." required>
                                        <small id="categoryText" class="form-text text-muted">Nama produk untuk identitas setiap item.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div></div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="images" required />
                                            <label class="custom-file-label">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="small_description">Deskripsi Singkat</label>
                                        <textarea class="form-control" name="small_description" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control markdown-input" name="description" rows="15"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="categories_id">Kategori
                                        <span class="text-danger">*</span></label>
                                        <select class="form-control" name="categories_id" id="categories_id" required>
                                            <option>Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_categories_id">Sub Kategori</label>
                                        <select class="form-control" name="sub_categories_id" id="sub_categories_id">
                                            <option>Sub Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="benefit">Manfaat</label>
                                        <textarea class="form-control markdown-input" name="benefit" rows="15"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="method">Cara Pemakaian</label>
                                        <textarea class="form-control markdown-input" name="method" rows="15"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" name="price" class="form-control" placeholder="Masukkan Harga Produk ..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Berat</label>
                                        <input type="number" name="weight" class="form-control" placeholder="Masukkan Berat Produk ..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Stok</label>
                                        <input type="number" name="qty" class="form-control" placeholder="Masukkan Stok Produk ..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Masukkan Slug / Link Produk ..." required />
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

