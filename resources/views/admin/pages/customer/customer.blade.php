@extends('admin.layouts.app')

@section('title')
    Pelanggan
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Pelanggan</h4>
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
                            <a href="{{ route('admin.pelanggan.index') }}">Pelanggan</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Daftar Seluruh Pelanggan

                                        <div class="card-category">
                                            Menampilkan semua data pelanggan yang terdaftar.
                                        </div>
                                    </div>
                                    <div class="card-tools">
                                        <a href="{{ route('admin.pelanggan.create') }}" class="btn btn-secondary">
											<span class="btn-label" style="margin-right:0.5rem">
												<i class="fa fa-plus"></i>
											</span>
											Tambah Pelanggan
										</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="non-member-tab" data-toggle="pill" href="#non-member" role="tab" aria-controls="non-member" aria-selected="true">Non Member</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="member-tab" data-toggle="pill" href="#member" role="tab" aria-controls="member" aria-selected="false">Member</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="non-member" role="tabpanel" aria-labelledby="non-member-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($users as $user)
                                                    @if ($user->is_member == 0)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->address }}</td>
                                                            <td>{{ $user->phone_number }}</td>
                                                            <td>
                                                                <form action="{{ route('admin.pelanggan.destroy', $user->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <a href="{{ route('admin.pelanggan.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($users as $user)
                                                    @if ($user->is_member == 1)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->address }}</td>
                                                            <td>{{ $user->phone_number }}</td>
                                                            <td>
                                                                <form action="{{ route('admin.pelanggan.destroy', $user->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <a href="{{ route('admin.pelanggan.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
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
        </div>
    </div>
@endsection
