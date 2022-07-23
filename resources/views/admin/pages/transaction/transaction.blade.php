@extends('admin.layouts.app')

@section('title')
    Transaksi
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Transaksi</h4>
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
                            <a href="{{ route('admin.transaksi.index') }}">Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Daftar Transaksi

                                        <div class="card-category">
                                            Menampilkan semua data transaksi yang tersedia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="order-tab" data-toggle="pill" href="#order" role="tab" aria-controls="order" aria-selected="true">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="process-tab" data-toggle="pill" href="#process" role="tab" aria-controls="process" aria-selected="false">Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="delivery-tab" data-toggle="pill" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false">Kirim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="finish-tab" data-toggle="pill" href="#finish" role="tab" aria-controls="finish" aria-selected="false">Selesai</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="order-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 0)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->name }}</td>
                                                            <td>{{ $transaction->gross_amount }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <form action="{{ url('admin/transaction/update-process/' . $transaction->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <button type="submit" class="btn btn-primary">Process</button>
                                                                    <button class="btn btn-warning">View</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="process-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 1)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->name }}</td>
                                                            <td>{{ $transaction->gross_amount }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" id="input_resi" value="{{ $transaction->id }}">Input Resi</button>
                                                                <button class="btn btn-warning">View</button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 2)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->name }}</td>
                                                            <td>{{ $transaction->gross_amount }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <button class="btn btn-warning" onclick="return confirm('Are you sure ?')">View</button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="finish" role="tabpanel" aria-labelledby="finish-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 3)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->name }}</td>
                                                            <td>{{ $transaction->gross_amount }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <button class="btn btn-warning" onclick="return confirm('Are you sure ?')">View</button>
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

@push('scripts')
    <script>
        $('#input_resi').click(function(e){
            let transactions_id = $('#input_resi').val();

            swal({
                title: 'Masukkan Nomor Resi',
                html: '<br><input class="form-control" placeholder="Masukkan nomor resi ..." id="input-field">',
                content: {
                    element: "input",
                    attributes: {
                        placeholder: "Masukkan nomor resi ...",
                        type: "text",
                        id: "input-field",
                        className: "form-control"
                    },
                },
                buttons: {
                    cancel: {
                        visible: true,
                        className: 'btn btn-danger'
                    },
                    confirm: {
                        className : 'btn btn-success'
                    }
                },
            }).then(
                function() {
                    let resi = $('#input-field').val();

                    $.ajax({
                        type: 'PUT',
                        url: "/admin/transaction/update-delivery/" + transactions_id,
                        data: {
                            'transactions_id': transactions_id,
                            'resi': resi
                        },
                        cache: false
                    })

                    location.reload()
                }
            );
        });
    </script>
@endpush
