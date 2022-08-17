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
                                                <a href="{{ url('akun/pesanan') }}" class="dash-active">Pesanan</a>
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
                                                            <div class="timeline-l-i {{ $orders->process > 2 ? 'timeline-l-i--finish' : ''  }}">
                                                                <span class="timeline-circle"></span>
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
                                                        <div class="description-title">
                                                            {{ $order_detail->products->name }} <br>

                                                            <span class="manage-o__text-2 u-c-silver">Quantity:
                                                                <span class="manage-o__text-2 u-c-secondary">{{ $order_detail->qty }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="description__info-wrap">
                                                        <div>
                                                            <span class="manage-o__text-2 u-c-silver">Total:
                                                                <span class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($order_detail->products->price * $order_detail->qty, 2, ',', '.') }}</span>
                                                            </span>
                                                        </div>

                                                        @if ($orders->process == 3)
                                                            @if (\App\Models\Review::where('users_id', Auth::id())->where('products_id', $order_detail->products_id)->count() == 0)
                                                                <div class="f-cart u-s-m-t-5">
                                                                    <center>
                                                                        <button class="btn btn-main" data-toggle="modal" data-target="#newsletter-modal">NILAI</button>
                                                                    </center>

                                                                    <!--====== Modal ======-->
                                                                    <div class="modal fade new-l" id="newsletter-modal">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content modal--shadow">

                                                                                <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>

                                                                                <div class="modal-body">
                                                                                    <div class="row u-s-m-x-0">
                                                                                        <div class="col-lg-12 new-l__col-2">
                                                                                            <div class="new-l__section u-s-m-t-30">
                                                                                                <div class="u-s-m-b-8 new-l--center">
                                                                                                    <h3 class="new-l__h3">Rating dan Review</h3>
                                                                                                </div>
                                                                                                <div class="u-s-m-b-30 new-l--center">
                                                                                                    <p class="new-l__p1">Pilihlah rating dan masukkan review terhadap produk anda.</p>
                                                                                                </div>
                                                                                                <form action="{{ url('tambah-review') }}" class="new-l__form" method="POST">
                                                                                                    @csrf
                                                                                                    @method('POST')

                                                                                                    <input type="hidden" name="order_number" value="{{ $orders->order_number }}">
                                                                                                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                                                                                    <input type="hidden" name="products_id" value="{{ $order_detail->products_id }}">

                                                                                                    <div class="u-s-m-b-15">
                                                                                                        <div class="rev-f2__table-wrap gl-scroll">
                                                                                                            <table class="rev-f2__table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th>
                                                                                                                            <div class="gl-rating-style-2">
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <span>(1)</span>
                                                                                                                            </div>
                                                                                                                        </th>
                                                                                                                        <th>
                                                                                                                            <div class="gl-rating-style-2">
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <span>(2)</span>
                                                                                                                            </div>
                                                                                                                        </th>
                                                                                                                        <th>
                                                                                                                            <div class="gl-rating-style-2">
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <span>(3)</span>
                                                                                                                            </div>
                                                                                                                        </th>
                                                                                                                        <th>
                                                                                                                            <div class="gl-rating-style-2">
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <span>(4)</span>
                                                                                                                            </div>
                                                                                                                        </th>
                                                                                                                        <th>
                                                                                                                            <div class="gl-rating-style-2">
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <span>(5)</span>
                                                                                                                            </div>
                                                                                                                        </th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <!--====== Radio Box ======-->
                                                                                                                            <div class="radio-box">
                                                                                                                                <input type="radio" id="stars_rated" name="stars_rated" value="1">
                                                                                                                                <div class="radio-box__state radio-box__state--primary">
                                                                                                                                    <label class="radio-box__label" for="star-1"></label>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--====== End - Radio Box ======-->
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <!--====== Radio Box ======-->
                                                                                                                            <div class="radio-box">
                                                                                                                                <input type="radio" id="stars_rated" name="stars_rated" value="2">
                                                                                                                                <div class="radio-box__state radio-box__state--primary">
                                                                                                                                    <label class="radio-box__label" for="star-2"></label>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--====== End - Radio Box ======-->
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <!--====== Radio Box ======-->
                                                                                                                            <div class="radio-box">
                                                                                                                                <input type="radio" id="stars_rated" name="stars_rated" value="3">
                                                                                                                                <div class="radio-box__state radio-box__state--primary">
                                                                                                                                    <label class="radio-box__label" for="star-3"></label>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--====== End - Radio Box ======-->
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <!--====== Radio Box ======-->
                                                                                                                            <div class="radio-box">
                                                                                                                                <input type="radio" id="stars_rated" name="stars_rated" value="4">
                                                                                                                                <div class="radio-box__state radio-box__state--primary">
                                                                                                                                    <label class="radio-box__label" for="star-4"></label>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--====== End - Radio Box ======-->
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <!--====== Radio Box ======-->
                                                                                                                            <div class="radio-box">
                                                                                                                                <input type="radio" id="stars_rated" name="stars_rated" value="5">
                                                                                                                                <div class="radio-box__state radio-box__state--primary">
                                                                                                                                    <label class="radio-box__label" for="star-5"></label>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!--====== End - Radio Box ======-->
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="u-s-m-b-15">
                                                                                                        <label class="gl-label" for="reviewer-text">Review Produk</label>
                                                                                                        <textarea class="text-area text-area--primary-style" id="users_review" style="height:200px;" name="users_review"></textarea>
                                                                                                    </div>
                                                                                                    <div class="u-s-m-b-15">
                                                                                                        <button class="btn btn--e-brand-b-2" type="submit">KIRIM</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--====== End - Modal ======-->
                                                                </div>
                                                            @endif
                                                        @endif

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

                                                <span class="dash__text-2">{{ $orders->users->address }} - {{ Auth::user()->cities_id == NULL ? '' : $address_billing['city_name'] }} - {{ Auth::user()->provinces_id == NULL ? '' : $address_billing['province'] }}</span>

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
                                                    <div class="manage-o__text-2 u-c-secondary">Biaya Penanganan</div>
                                                    <div class="manage-o__text-2 u-c-secondary">Rp. 0,00</div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-20">
                                                    <div class="manage-o__text-2 u-c-secondary">Total</div>
                                                    <div class="manage-o__text-2 u-c-secondary">Rp. {{ number_format($orders->total, 2, ',', '.') }}</div>
                                                </div>
                                                @if ($orders->process == 2)
                                                    <div class="f-cart u-s-m-b-10">
                                                        <form action="{{ url('transaction/update-finish/' . $orders->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <input type="hidden" name="order_number" value="{{ $orders->order_number }}" />
                                                            <button class="btn btn--e-brand-b-2" type="submit">PAKET DITERIMA</button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="f-cart u-s-m-b-10">
                                                        <form action="{{ route('buy-again') }}" method="POST">
                                                            @csrf
                                                            @method('POST')

                                                            @foreach ($order_details as $order_detail)
                                                                <input type="hidden" name="order_number" value="{{ $orders->order_number }}">
                                                                <input type="hidden" name="users_id[]" value="{{ Auth::user()->id }}">
                                                                <input type="hidden" name="products_id[]" value="{{ $order_detail->products_id }}">
                                                                <input type="hidden" name="products_qty[]" value="{{ $order_detail->qty }}">
                                                            @endforeach

                                                            <button type="submit" class="btn btn-main">BELI LAGI</button>
                                                        </form>
                                                    </div>
                                                @endif
                                                <span class="dash__text-2 text-center">Pembayaran menggunakan {{ strtoupper($orders->payments->payment_type) }}</span>
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
