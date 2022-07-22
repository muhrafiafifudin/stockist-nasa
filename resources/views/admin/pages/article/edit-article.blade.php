@extends('admin.layouts.app')

@section('title')
    Form Artikel
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Artikel</h4>
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
                            <a href="{{ route('admin.artikel.index') }}">Artikel</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.artikel.edit', $articles->id) }}">Edit Artikel</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Edit Artikel
                                </div>
                                <div class="card-category">
                                    Mengubah artikel mengenai informasi terbaru.
                                </div>
                            </div>
                            <form action="{{ route('admin.artikel.update', $articles->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Judul Artikel</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ $articles->title }}" placeholder="Masukkan Judul Artikel ..." required>
                                        <small id="categoryText" class="form-text text-muted">Nama kategori untuk identitas setiap produk.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="images" value="{{ $articles->images }}" />
                                            <label class="custom-file-label">{{ $articles->images }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Deskripsi</label>
                                        <textarea class="form-control" name="content" rows="15" id="markdown-input">{{ $articles->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug / Url</label>
                                        <input type="text" class="form-control" name="slug" id="slug" value="{{ $articles->slug }}" placeholder="Masukkan Alamat Link ..." required>
                                        <small id="categoryText" class="form-text text-muted">Nama link untuk detail artikel.</small>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.artikel.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
