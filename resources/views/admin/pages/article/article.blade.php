@extends('admin.layouts.app')

@section('title')
    Artikel
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Artikel</h4>
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
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Seluruh Artikel

                                        <div class="card-category">
                                            Menampilkan seluruh artikel yang tersedia.
                                        </div>
                                    </div>
                                    <div class="card-tools">
                                        <a href="{{ route('admin.artikel.create') }}" class="btn btn-secondary">
											<span class="btn-label" style="margin-right:0.5rem">
												<i class="fa fa-plus"></i>
											</span>
											Tambah Artikel
										</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Images</th>
                                            <th scope="col">Judul Artikel</th>
                                            <th scope="col">Penulis</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($articles as $article)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $article->images }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->admins->name }}</td>
                                                <td>
                                                    <form action="{{ route('admin.artikel.destroy', $article->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ route('admin.artikel.edit', $article->id) }}" class="btn btn-warning">Edit</a>
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
