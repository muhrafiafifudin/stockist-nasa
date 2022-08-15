@extends('users.layouts.app')

@section('title')
    Stockist Nasa
@endsection

@section('content')
    <div class="app-content">

        <!--====== Primary Slider ======-->
        <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
            <div class="owl-carousel primary-style-1" id="hero-slider">
                <div class="hero-slide hero-slide--1">
                    <img src="{{ asset('users/img/banner1.jpg') }}" alt="...">
                </div>
                <div class="hero-slide hero-slide--2">
                    <img src="{{ asset('users/img/banner2.jpg') }}" alt="...">
                </div>
            </div>
        </div>
        <!--====== End - Primary Slider ======-->


        <!--====== Section 1 ======-->
        <div class="u-s-p-b-20 u-s-m-t-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-truck"></i></div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1">Pengiriman Cepat</span>
                                    <span class="service__info-text-2">Pengiriman dilakukan secara cepat menggunakan kurir pilihan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-redo"></i></div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1">Pembelian Dengan Aman</span>
                                    <span class="service__info-text-2">Perlindungan kami mencakup dari pemesanan hingga pengiriman</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">24/7 Layanan Kami</span>

                                    <span class="service__info-text-2">Bantuan sepanjang waktu agar belanja anda lancar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 9 ======-->

        <!--====== Section 4 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">PRODUK PILIHAN</h1>

                                <span class="section__span u-c-silver">TEMUKAN PRODUK PILIHAN ANDA</span>
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

                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="product-o product-o--hover-on u-h-100">
                                    <div class="product-o__wrap">
                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ url('katalog/produk-nasa/detail/' . $product->slug) }}">
                                            <img class="aspect__img" src="{{ asset('admin/img/product/' . $product->images) }}" alt="">
                                        </a>

                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>
                                                    <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View">
                                                        <i class="fas fa-search-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart">
                                                        <i class="fas fa-plus-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">
                                        <a href="#">{{ $product->categories->category }}</a>
                                    </span>

                                    <span class="product-o__name">
                                        <a href="{{ url('katalog/produk-nasa/detail/' . $product->slug) }}">{{ $product->name }}</a>
                                    </span>

                                    <div class="product-o__rating gl-rating-style">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>

                                        <span class="product-o__review">(23)</span>
                                    </div>

                                    @guest
                                        <div class="product-m__price">Rp. {{ number_format($product->price, 2, ',', '.') }}</div>
                                    @endguest

                                    @auth
                                        @if ($users->is_member === 1)
                                            <div class="product-m__price">Rp. {{ number_format($product->price, 2, ',', '.') }}</div>
                                            <div class="product-m__price">HD = Rp. {{ number_format($product->distributor_price, 2, ',', '.') }}</div>
                                        @else
                                            <div class="product-m__price">Rp. {{ number_format($product->price, 2, ',', '.') }}</div>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->

        <!--====== Section 5 ======-->
        <div class="u-s-p-b-60">

            @if ($articles->count() > 0)
                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">POSTINGAN TERBARU</h1>

                                    <span class="section__span u-c-silver">MULAI HARIMU DENGAN POSTINGAN YANG TERBARU</span>
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

                            @foreach ($articles as $article)
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="bp-mini bp-mini--img u-h-100">
                                        <div class="bp-mini__thumbnail">
                                            <!--====== Image Code ======-->
                                            <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="{{ url('artikel/' . $article->slug) }}">
                                                <img class="aspect__img" src="images/blog/post-2.jpg" alt="">
                                            </a>
                                            <!--====== End - Image Code ======-->
                                        </div>
                                        <div class="bp-mini__content">
                                            <div class="bp-mini__stat">
                                                <span class="bp-mini__stat-wrap">
                                                    <span class="bp-mini__publish-date">
                                                        <a>
                                                            <span>{{ date('d M Y', strtotime($article->created_at)) }}</span>
                                                        </a>
                                                    </span>
                                                </span>

                                                <span class="bp-mini__stat-wrap">
                                                    <span class="bp-mini__preposition">By</span>
                                                    <span class="bp-mini__author">
                                                        <a href="{{ url('artikel/' . $article->slug) }}">{{ $article->admins->name }}</a>
                                                    </span>
                                                </span>

                                                <span class="bp-mini__stat">
                                                    <span class="bp-mini__comment">
                                                        <a href="{{ url('artikel/' . $article->slug) }}">
                                                            <i class="far fa-comments u-s-m-r-4"></i>
                                                            <span>8</span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>

                                            <div class="bp-mini__category">
                                                <a>Learning</a>
                                                <a>News</a>
                                                <a>Health</a>
                                            </div>

                                            <span class="bp-mini__h1">
                                                <a href="{{ url('artikel/' . $article->slug) }}">{{ $article->title }}</a>
                                            </span>

                                            <p class="bp-mini__p">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>

                                            <div class="blog-t-w">
                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>
                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>
                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            @endif

        </div>
        <!--====== End - Section 5 ======-->


    </div>
@endsection
