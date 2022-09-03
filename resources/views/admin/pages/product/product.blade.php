@extends('admin.layouts.app')

@section('title')
    Produk
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Produk</h4>
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
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Daftar Produk

                                        <div class="card-category">
                                            Menampilkan semua data produk yang tersedia.
                                        </div>
                                    </div>
                                    <div class="card-tools">
                                        <a href="{{ route('admin.produk.create') }}" class="btn btn-secondary">
											<span class="btn-label" style="margin-right:0.5rem">
												<i class="fa fa-plus"></i>
											</span>
											Tambah Produk
										</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga Produk</th>
                                            <th scope="col">Stok Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <img src="{{ asset('admin/img/product/' . $product->images) }}" alt="" width="100px">
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>Rp. {{ number_format($product->price, 2, ',', '.') }}</td>
                                                <td>{{ $product->qty }}</td>
                                                <td>
                                                    <form action="{{ route('admin.produk.destroy', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ route('admin.produk.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
