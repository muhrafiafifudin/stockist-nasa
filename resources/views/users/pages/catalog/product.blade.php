@extends('users.layouts.app')

@section('title')
    Produk | Stockist Nasa
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
                                <li class="has-separator">
                                    <a href="#">Katalog</a>
                                </li>
                                <li class="is-marked">
                                    <a href="#">Produk Nasa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->

        <!--====== Section 2 ======-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-p">
                        <div class="shop-p__tool-style">
                            <form>
                                <div class="tool-style__form-wrap">
                                    <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                            <option>Show: 8</option>
                                            <option selected>Show: 12</option>
                                            <option>Show: 16</option>
                                            <option>Show: 28</option>
                                        </select></div>
                                    <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                            <option selected>Sort By: Newest Items</option>
                                            <option>Sort By: Latest Items</option>
                                            <option>Sort By: Best Selling</option>
                                            <option>Sort By: Best Rating</option>
                                            <option>Sort By: Lowest Price</option>
                                            <option>Sort By: Highest Price</option>
                                        </select></div>
                                </div>
                            </form>
                        </div>
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">
                                                <a href="{{ url('katalog/produk-nasa/detail/' . $product->slug) }}" class="aspect aspect--bg-grey aspect--square u-d-block">
                                                    <img class="aspect__img" src="{{ asset('admin/img/product/' . $product->images) }}" alt="">
                                                </a>
                                                <div class="product-m__add-cart">
                                                    <a class="btn--e-brand" data-modal="modal"
                                                        data-modal-id="#add-to-cart">Tambah ke Keranjang</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">
                                                    <a href="#">{{ $product->categories->category }}</a>
                                                </div>
                                                <div class="product-m__name">
                                                    <a href="{{ url('katalog/produk-nasa/detail/' . $product->slug) }}">{{ $product->name }}</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i
                                                        class="far fa-star"></i><i class="far fa-star"></i>
                                                    <span class="product-m__review">(23)</span>
                                                </div>
                                                <div class="product-m__price">Rp. {{ number_format($product->price, 2, ',', '.') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="u-s-p-y-60">

                            <!--====== Pagination ======-->
                            <ul class="shop-p__pagination">
                                <li class="is-active">

                                    <a href="shop-grid-full.html">1</a>
                                </li>
                                <li>

                                    <a href="shop-grid-full.html">2</a>
                                </li>
                                <li>

                                    <a href="shop-grid-full.html">3</a>
                                </li>
                                <li>

                                    <a href="shop-grid-full.html">4</a>
                                </li>
                                <li>

                                    <a class="fas fa-angle-right" href="shop-grid-full.html"></a>
                                </li>
                            </ul>
                            <!--====== End - Pagination ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 2 ======-->
    </div>
@endsection
