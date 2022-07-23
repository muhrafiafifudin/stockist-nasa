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

                                    <a href="dash-my-profile.html">My Account</a>
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
                                                <a href="{{ url('akun/alamat') }}">Alamat</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('akun/pesanan') }}" class="dash-active">Pesanan</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <h1 class="dash__h1 u-s-m-b-30">Detail Pesanan</h1>
                                <div class="dash__box dash__box--shadow dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="dash-l-r">
                                            <div>
                                                <div class="manage-o__text-2 u-c-secondary">Order #{{ $orders->order_number }}</div>
                                                <div class="manage-o__text u-c-silver">Transaksi pada {{ date('d M Y H:i:s', strtotime($orders->created_at)) }}</div>
                                            </div>
                                            <div>
                                                <div class="manage-o__text-2 u-c-silver">Total:
                                                    <span class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($orders->total, 2, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="manage-o">
                                            <div class="manage-o__header u-s-m-b-30">
                                                <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>
                                                    <span class="manage-o__text">Nomor Resi : {{ $orders->resi == NULL ? 'Sedang Diproses' : $orders->resi }}</span>
                                                </div>
                                            </div>
                                            <div class="dash-l-r">
                                                <div class="manage-o__text u-c-secondary">Estimasi Pengiriman {{ $orders->estimate }}</div>
                                                <div class="manage-o__icon"><i class="fas fa-truck u-s-m-r-5"></i>
                                                    <span class="manage-o__text">{{ strtoupper($orders->courier) }}</span>
                                                </div>
                                            </div>
                                            <div class="manage-o__timeline u-s-m-b-30">
                                                <div class="timeline-row">
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i {{ $orders->process > 0 ? 'timeline-l-i--finish' : ''  }}">
                                                                <span class="timeline-circle"></span>
                                                            </div>
                                                            <span class="timeline-text">Proses</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i {{ $orders->process > 1 ? 'timeline-l-i--finish' : ''  }}">
                                                                <span class="timeline-circle"></span>
                                                            </div>
                                                            <span class="timeline-text">Pengiriman</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div class="timeline-step">
                                                            <div class="timeline-l-i">
                                                                <span class="timeline-circle {{ $orders->process > 3 ? 'timeline-l-i--finish' : ''  }}"></span>
                                                            </div>
                                                            <span class="timeline-text">Selesai</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach ($order_details as $order_detail)
                                                <div class="manage-o__description u-s-m-b-30">
                                                    <div class="description__container">
                                                        <div class="description__img-wrap">
                                                            <img class="u-img-fluid" src="{{ asset('admin/img/product/' . $order_detail->products->images) }}" alt="">
                                                        </div>
                                                        <div class="description-title">{{ $order_detail->products->name }}</div>
                                                    </div>
                                                    <div class="description__info-wrap">
                                                        <div>
                                                            <span class="manage-o__text-2 u-c-silver">Quantity:
                                                                <span class="manage-o__text-2 u-c-secondary">{{ $order_detail->qty }}</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="manage-o__text-2 u-c-silver">Total:
                                                                <span class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($order_detail->products->price * $order_detail->qty, 2, ',', '.') }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">Alamat Pengiriman</h2>
                                                <h2 class="dash__h2 u-s-m-b-8">{{ $orders->name }}</h2>

                                                <span class="dash__text-2">{{ $orders->address }} - {{ $address_shipping['city_name'] }} - {{ $address_shipping['province'] }}</span>

                                                <span class="dash__text-2">{{ $orders->phone_number }}</span>
                                            </div>
                                        </div>
                                        <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">Alamat Pembayaran</h2>
                                                <h2 class="dash__h2 u-s-m-b-8">{{ $orders->users->name }}</h2>

                                                <span class="dash__text-2">{{ $orders->users->address }} - {{ $address_billing['city_name'] }} - {{ $address_billing['province'] }}</span>

                                                <span class="dash__text-2">{{ $orders->users->phone_number }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">RINGKASAN TOTAL</h2>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                                                    <div class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($orders->subtotal, 2, ',', '.') }}</div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Berat Barang</div>
                                                    <div class="manage-o__text-2 u-c-secondary">{{ number_format($orders->weight, 0, ',', '.') }} gram</div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Biaya Pengiriman</div>
                                                    <div class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($orders->shipping, 2, ',', '.') }}</div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Pajak</div>
                                                    <div class="manage-o__text-2 u-c-secondary">Rp. 0,00</div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Total</div>
                                                    <div class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($orders->total, 2, ',', '.') }}</div>
                                                </div>

                                                <span class="dash__text-2">Pembayaran menggunakan {{ strtoupper($orders->payments->payment_type) }}</span>
                                            </div>
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
