@extends('users.layouts.app')

@section('title')
    My Account | Stockist Nasa
@endsection

@section('content')
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="is-marked">
                                    <a href="#">Order</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">

                                <!--====== Dashboard Features ======-->
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                    <div class="dash__pad-1">

                                        <span class="dash__text u-s-m-b-16">Hello, {{ Auth::user()->name }}</span>
                                        <ul class="dash__f-list">
                                            <li>
                                                <a href="{{ url('akun/beranda') }}">Beranda</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('akun/profil') }}">Profil Saya</a>
                                            </li>
                                            <li>
                                                <a class="dash-active">Pesanan</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Pesanan</h1>
                                        <span class="dash__text u-s-m-b-30">Menampilan seluruh pesanan yang telah dilakukan.</span>

                                        <div class="m-order__list">
                                            @foreach ($orders as $order)
                                                <div class="m-order__get">
                                                    <div>
                                                        <div class="dash-l-r">
                                                            <div>
                                                                <div class="manage-o__text-2 u-c-secondary">Order #{{ $order->order_number }}</div>
                                                                <div class="manage-o__text u-c-silver">Transaksi pada {{ date('d M Y H:i:s', strtotime($order->created_at)) }}</div>
                                                            </div>
                                                            <div>
                                                                <div class="dash__link dash__link--brand text-center">
                                                                    @if (\App\Models\Payment::where('order_number', $order->order_number)->exists())
                                                                        <a href="{{ url('akun/pesanan/' . $order->order_number) }}">KELOLA</a>
                                                                    @else
                                                                        <a href="{{ url('invoice/' . $order->order_number) }}" class="u-s-m-r-14">BAYAR</a>
                                                                    @endif
                                                                </div>
                                                                <div>
                                                                    <span class="manage-o__text-2 u-c-silver">Total:
                                                                        <span class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($order->total, 2, ',', '.') }}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
@endsection
