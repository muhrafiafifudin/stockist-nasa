@extends('users.layouts.app')

@section('title')
    Checkout | Stockist Nasa
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

                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="is-marked">

                                    <a href="checkout.html">Checkout</a>
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
                <div class="container">
                    <div class="checkout-f">
                        <form action="{{ route('checkout.placeorder') }}" class="checkout-f__delivery" method="POST">
                            @csrf
                            @method('POST')

                            <input type="hidden" name="order_number" value="{{ $checkout['order'] }}">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h1 class="checkout-f__h1">INFORMASI PENGIRIMAN</h1>

                                    <div class="u-s-m-b-30 u-s-m-t-30">
                                        <!--====== First Name, Last Name ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="name">NAMA LENGKAP *</label>
                                            <input class="input-text input-text--primary-style" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Masukka nama lengkap anda ..." required>
                                        </div>
                                        <!--====== End - First Name, Last Name ======-->

                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="email">E-MAIL *</label>
                                            <input class="input-text input-text--primary-style" type="text" name="email" value="{{ Auth::user()->email }}" placeholder="Masukka emai anda ..." required>
                                        </div>
                                        <!--====== End - E-MAIL ======-->

                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="phone_number">NOMOR TELEPON *</label>
                                            <input class="input-text input-text--primary-style" type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" placeholder="Masukka nomor telepon anda ..." required>
                                        </div>
                                        <!--====== End - PHONE ======-->

                                        <!--====== Province ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="province">PROVINSI *</label>
                                            <input class="input-text input-text--primary-style" type="text" value="{{ $address['province'] }}" name="province" id="province" placeholder="Masukkan provinsi anda ..." disabled>
                                        </div>
                                        <!--====== End - Province ======-->

                                        <!--====== Regency ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="regency">KOTA / KABUPATEN *</label>
                                            <input class="input-text input-text--primary-style" type="text" value="{{ $address['city_name'] }}" name="regency" id="regency" placeholder="Masukkan kota anda ..." disabled>
                                        </div>
                                        <!--====== End - Regency ======-->

                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="address">ALAMAT PENGIRIMAN *</label>
                                            <input class="input-text input-text--primary-style" type="text" value="{{ Auth::user()->address }}" name="address" id="address" placeholder="Masukkan nama jalan, kelurahan, kecamatan anda ..." required>
                                        </div>
                                        <!--====== End - Street Address ======-->

                                        <!--====== ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="postcode">KODE POS *</label>
                                            <input class="input-text input-text--primary-style" type="text" value="{{ Auth::user()->postcode }}" name="postcode" id="postcode" placeholder="Masukkan kodepos anda ..." required>
                                        </div>
                                        <!--====== End - ZIP/POSTAL ======-->

                                        <div class="u-s-m-b-10">
                                            <label class="gl-label" for="note">CATATAN</label>
                                            <textarea class="text-area text-area--primary-style" name="note" id="note" placeholder="Masukkan note anda ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h1 class="checkout-f__h1">RINGKASAN PESANAN</h1>

                                    <!--====== Order Summary ======-->
                                    <div class="o-summary">
                                        <div class="o-summary__section u-s-m-b-30">
                                            <div class="o-summary__item-wrap gl-scroll">
                                                @foreach ($cartItems as $cartItem)
                                                    <div class="o-card">
                                                        <div class="o-card__flex">
                                                            <div class="o-card__img-wrap">
                                                                <img class="u-img-fluid" src="{{ asset('admin/img/product/' . $cartItem->products->images) }}" alt="">
                                                            </div>
                                                            <div class="o-card__info-wrap">
                                                                <span class="o-card__name">
                                                                    <a href="{{ url('katalog/produk-nasa/detail/' . $cartItem->products->slug) }}">{{ $cartItem->products->name }}</a>
                                                                </span>
                                                                <span class="o-card__quantity">Jumlah x {{ $cartItem->products_qty }}</span>
                                                                @auth
                                                                    @if ($users->is_member === 1)
                                                                        <span class="o-card__price">Rp. {{ number_format($cartItem->products->distributor_price, 2, ',', '.') }}</span>
                                                                    @else
                                                                        <span class="o-card__price">Rp. {{ number_format($cartItem->products->price, 2, ',', '.') }}</span>
                                                                    @endif
                                                                @endauth
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="o-summary__section u-s-m-b-30">
                                            <div class="o-summary__box">
                                                <h1 class="checkout-f__h1">LOKASI PENGIRIMAN</h1>
                                                <div class="ship-b">

                                                    <span class="ship-b__text">Pengiriman ke :</span>
                                                    <div class="ship-b__box u-s-m-b-10">
                                                        <p class="ship-b__p">
                                                            Kab/Kota {{ $address['city_name'] }}, Provinsi {{ $address['province'] }} <br>
                                                            Estimasi : {{ $checkout['estimate'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="o-summary__section u-s-m-b-30">
                                            <div class="o-summary__box">
                                                <table class="o-summary__table">
                                                    <tbody>
                                                        <tr>
                                                            <td>SUBTOTAL</td>
                                                            <td>Rp. {{ number_format($checkout['subtotal'], 2, ',', '.') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BERAT BARANG</td>
                                                            <td>{{ number_format($checkout['weight'], 0, ',', '.') }} gram</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIAYA PENGIRIMAN</td>
                                                            <td>Rp. {{ number_format($checkout['shipping'], 2, ',', '.') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIAYA PENANGANAN</td>
                                                            <td>Rp. 0,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>TOTAL</td>
                                                            <td>Rp. {{ number_format($checkout['total'], 2, ',', '.') }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="u-s-m-t-30">
                                                    <button class="btn btn--e-brand-b-2" type="submit">PROSES INVOICE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Order Summary ======-->
                                </div>
                            </div>

                            <input type="hidden" name="point" value="{{ $checkout['point'] }}">

                            <input type="hidden" name="courier" value="{{ $checkout['courier'] }}">
                            <input type="hidden" name="weight" value="{{ $checkout['weight'] }}">
                            <input type="hidden" name="estimate" value="{{ $checkout['estimate'] }}">

                            <input type="hidden" name="province" value="{{ $checkout['province'] }}">
                            <input type="hidden" name="regency" value="{{ $checkout['regency'] }}">
                            <input type="hidden" name="shipping" value="{{ $checkout['shipping'] }}">
                            <input type="hidden" name="subtotal" value="{{ $checkout['subtotal'] }}">
                            <input type="hidden" name="total" value="{{ $checkout['total'] }}">

                        </form>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
@endsection
