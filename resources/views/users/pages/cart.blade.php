@extends('users.layouts.app')

@section('title')
    Keranjang | Stockist Nasa
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
                                    <a href="{{ url('keranjang') }}">Keranjang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->

        @if ($cartItems->count() > 0)
            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">DAFTAR KERANJANG</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                                <div class="table-responsive">
                                    <table class="table-p">
                                        <tbody>
                                            @php $subTotal = 0; $totalItems = 0; $weight = 0; $totalWeight = 0; @endphp
                                            @foreach ($cartItems as $cartItem)
                                                <!--====== Row ======-->
                                                <tr class="product-data">
                                                    <td>
                                                        <div class="table-p__box">
                                                            <div class="table-p__img-wrap">

                                                                <img class="u-img-fluid"
                                                                    src="{{ asset('admin/img/product/' . $cartItem->products->images) }}" alt="">
                                                            </div>
                                                            <div class="table-p__info">

                                                                <span class="table-p__name">

                                                                    <a href="{{ url('produk/' . $cartItem->products->categories->slug . '/' . $cartItem->products->slug) }}">{{ $cartItem->products->name }}</a></span>

                                                                <span class="table-p__category">

                                                                    <a href="shop-side-version-2.html">{{ $cartItem->products->categories->category }}</a></span>
                                                                <ul class="table-p__variant-list">
                                                                    <li>
                                                                        <span>Berat : {{ number_format($cartItem->products->weight, 0, ',', '.') }} gram</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Jumlah : {{ $cartItem->products_qty }}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="table-p__price">Rp. {{ number_format($cartItem->products->price, 2, ',', '.') }}</span>
                                                    </td>
                                                    <td>
                                                        <input type="hidden" class="product-id" value="{{ $cartItem->products_id }}">
                                                        <div class="table-p__input-counter-wrap">
                                                            <!--====== Input Counter ======-->
                                                            <div class="input-counter">
                                                                <span class="input-counter__minus fas fa-minus changeQuantity"></span>
                                                                <input class="input-counter__text input-counter--text-primary-style qty-input"
                                                                    type="text" value="{{ $cartItem->products_qty }}" data-min="1" data-max="15">
                                                                <span class="input-counter__plus fas fa-plus changeQuantity"></span>
                                                            </div>
                                                            <!--====== End - Input Counter ======-->
                                                        </div>

                                                        @php
                                                            $totalItem = $cartItem->products->price * $cartItem->products_qty;
                                                            $subTotal += $cartItem->products->price * $cartItem->products_qty;

                                                            $weight = $cartItem->products->weight * $cartItem->products_qty;
                                                            $totalWeight += $weight;
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        <span class="table-p__price">Rp. {{ number_format($totalItem, 2, ',', '.') }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="table-p__del-wrap">
                                                            <a class="far fa-trash-alt table-p__delete-link delete-cart-item"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!--====== End - Row ======-->
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="route-box">
                                    <div class="route-box__g1">
                                        <a class="route-box__link" href="{{ url('katalog/produk-nasa') }}"><i
                                                class="fas fa-long-arrow-alt-left"></i>
                                            <span>LANJUT BELANJA</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->

            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                                <form action="{{ route('keranjang') }}" class="f-cart" method="POST">
                                    @csrf
                                    @method('POST')

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <h1 class="gl-h1">LOKASI PENGIRIMAN DAN KURIR</h1>

                                                <span class="gl-text u-s-m-b-30">Masukkan alamat pengiriman dan kurir sesuai pilihan anda.</span>
                                                <div class="u-s-m-b-30">
                                                    <!--====== Select Box ======-->
                                                    <label class="gl-label" for="province">PROVINSI</label>
                                                    <select class="select-box select-box--primary-style" name="province" id="province" required>
                                                        <option selected="selected">Pilih Provinsi</option>
                                                    </select>
                                                    <!--====== End - Select Box ======-->
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <!--====== Select Box ======-->
                                                    <label class="gl-label" for="regency">KOTA / KABUPATEN</label>
                                                    <select class="select-box select-box--primary-style" name="regency" id="regency" required>
                                                        <option selected="selected">Pilih Kota / Kabupaten</option>
                                                    </select>
                                                    <!--====== End - Select Box ======-->
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <!--====== Select Box ======-->
                                                    <label class="gl-label" for="courier">KURIR</label>
                                                    <select class="select-box select-box--primary-style" name="courier" id="courier" required>
                                                        <option selected="selected">Pilih Kurir</option>
                                                    </select>
                                                    <!--====== End - Select Box ======-->
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <input type="hidden" value="{{ $totalWeight }}" id="weight">
                                                    <!--====== Select Box ======-->
                                                    <label class="gl-label" for="package">PAKET PENGIRIMAN</label>
                                                    <select class="select-box select-box--primary-style" name="package" id="package" required>
                                                        <option selected="selected">Pilih Paket Pengiriman</option>
                                                    </select>
                                                    <!--====== End - Select Box ======-->
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="estimate">ESTIMASI PENGIRIMAN</label>
                                                    <input class="input-text read-only--primary-style" type="text" name="estimate" id="estimate" placeholder="Zip/Postal Code" name="estimate" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <h1 class="gl-h1">ESTIMASI BIAYA PENGIRIMAN DAN BIAYA PENANGANAN</h1>

                                                <span class="gl-text u-s-m-b-30">Total harga estimasi biaya pengiriman dan biaya penanganan.</span>
                                                <div class="u-s-m-b-30">
                                                    <table class="f-cart__table">
                                                        <tbody>
                                                            <tr>
                                                                <td>SUBTOTAL</td>
                                                                <td id="subtotal" subtotal="{{ $subTotal }}">Rp. {{ number_format($subTotal, 2, ',', '.') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>BERAT BARANG</td>
                                                                <td>{{ number_format($totalWeight, 0, ',', '.') }} gram</td>
                                                            </tr>
                                                            <tr>
                                                                <td>BIAYA PENGIRIMAN</td>
                                                                <td id="shipping">Rp. 0,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>BIAYA PENANGANAN</td>
                                                                <td>Rp. 0,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>TOTAL</td>
                                                                <td id="total">Rp. 0,00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div>
                                                    <button class="btn btn--e-brand-b-2" type="submit">PROSES CHECKOUT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="shipping" />
                                    <input type="hidden" name="subtotal" value="<?php echo $subTotal; ?>"/>
                                    <input type="hidden" name="total" />
                                    <input type="hidden" name="weight" value="<?php echo $totalWeight; ?>"/>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->
        @else
            <!--====== Section 3 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 u-s-m-b-60">
                                <div class="empty">
                                    <div class="empty__wrap">
                                        <span class="empty__big-text">KOSONG</span>
                                        <span class="empty__text-1 u-s-m-b-20">Tidak ada produk yang anda masukkan dalam keranjang.</span>
                                        <a class="btn--cart-empty" href="{{ url('katalog/produk-nasa') }}">LANJUT BELANJA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->
        @endif

    </div>
@endsection
