@extends('admin.layouts.app')

@section('title')
    Customer
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Kategori</h4>
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
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Daftar Kategori

                                        <div class="card-category">
                                            Menampilkan semua data kategori yang tersedia.
                                        </div>
                                    </div>
                                    <div class="card-tools">
                                        <a href="{{ route('admin.kategori.create') }}" class="btn btn-secondary">
											<span class="btn-label" style="margin-right:0.5rem">
												<i class="fa fa-plus"></i>
											</span>
											Tambah Kategori
										</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Jumlah Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $category->category }}</td>
                                                <td>{{ $category->total_product }}</td>
                                                <td>
                                                    <form action="{{ route('admin.kategori.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ route('admin.kategori.edit', $category->id) }}" class="btn btn-warning">Edit</a>
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
