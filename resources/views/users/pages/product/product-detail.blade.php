@extends('users.layouts.app')

@section('title')
    Detail Produk | Stockist Nasa
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
                                    <a href="{{ url('produk') }}">Produk</a>
                                </li>
                                <li class="has-separator">
                                    <a href="">{{ $products->categories->category }}</a>
                                </li>
                                <li class="is-marked">
                                    <a href="{{ url('produk/' . $products->categories->slug . '/' . $products->slug) }}">{{ $products->name }}</a>
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
            <div class="row product-data">
                <div class="col-lg-5">

                    <!--====== Product Detail Zoom ======-->
                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                <div class="pd-o-img-wrap" data-src="{{ asset('admin/img/product/' . $products->images) }}">
                                    <img class="u-img-fluid" src="{{ asset('admin/img/product/' . $products->images) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    <div>
                                        <img class="u-img-fluid" src="{{ asset('admin/img/product/' . $products->images) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Product Detail Zoom ======-->
                </div>
                <div class="col-lg-7">

                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>
                            <span class="pd-detail__name">{{ $products->name }}</span>
                        </div>
                        <div>
                            <div class="pd-detail__inline">
                                <span class="pd-detail__price">Rp. {{ number_format($products->price, 2, ',', '.') }}</span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            @php $ratenum = number_format($rating_value) @endphp
                            <div class="pd-detail__rating gl-rating-style">
                                @for ($i=1; $i <= $ratenum; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor

                                @for ($j = $ratenum+1; $j <= 5; $j++)
                                    <i class="far fa-star"></i>
                                @endfor
                                <span class="pd-detail__review u-s-m-l-4">
                                    <a data-click-scroll="#view-review">{{ $reviews->count() }} Reviews</a>
                                </span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">
                                <span class="pd-detail__stock">{{ $products->qty }} in stock</span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <span class="pd-detail__preview-desc">{{ $products->small_description }}</span>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">
                                <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>
                                    <a href="signin.html">Add to Wishlist</a>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <form class="pd-detail__form">
                                <div class="pd-detail-inline-2">
                                    <div class="u-s-m-b-15">
                                        <!--====== Input Counter ======-->
                                        <input type="hidden" value="{{ $products->id }}" class="product-id">
                                        <div class="input-counter">
                                            <span class="input-counter__minus fas fa-minus"></span>
                                            <input class="input-counter__text input-counter--text-primary-style"
                                                type="text" value="1" data-min="1" data-max="1000">
                                            <span class="input-counter__plus fas fa-plus"></span>
                                        </div>
                                        <!--====== End - Input Counter ======-->
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <button class="btn btn--e-brand-b-2 addToCartBtn" type="submit">Tambah ke Keranjang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="u-s-m-b-15">
                            <span class="pd-detail__label u-s-m-b-8">Kepuasan Anda Adalah Kebahagiaan Kami :</span>
                            <ul class="pd-detail__policy-list">
                                <li><i class="fas fa-check u-s-m-r-8"></i>
                                    <span>Jaminan akan barang rusak atau tidak sampai.</span>
                                </li>
                                <li><i class="fas fa-check u-s-m-r-8"></i>
                                    <span>Pembayaran masuk sebelum jam 15.00 akan diproses hari ini.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--====== End - Product Right Side Details ======-->
                </div>
            </div>
        </div>

        <!--====== Product Detail Tab ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pd-tab">
                            <div class="u-s-m-b-30">
                                <ul class="nav pd-tab__list">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#description">DESKRIPSI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#benefit">MANFAAT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#method">CARA PEMAKAIAN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="view-review" data-toggle="tab" href="#review">REVIEWS
                                        <span>({{ $reviews->count() }})</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">

                                <!--====== Tab 1 ======-->
                                <div class="tab-pane fade show active" id="description">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                                {!! $products->description !!}
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab 1 ======-->

                                <!--====== Tab 2 ======-->
                                <div class="tab-pane" id="benefit">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                                {!! $products->benefit !!}
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab 2 ======-->

                                <!--====== Tab 3 ======-->
                                <div class="tab-pane" id="method">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                                {!! $products->method !!}
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab 3 ======-->

                                <!--====== Tab 4 ======-->
                                <div class="tab-pane" id="review">
                                    <div class="pd-tab__rev">
                                        <div class="u-s-m-b-15">
                                            <div class="pd-tab__rev-score">
                                                <div class="u-s-m-b-8">
                                                    <h2>{{ $reviews->count() }} Reviews - {{ $ratenum }} (Overall)</h2>
                                                </div>
                                                @php $ratenum = number_format($rating_value) @endphp
                                                <div class="gl-rating-style-2 u-s-m-b-8">
                                                    @for ($i=1; $i <= $ratenum; $i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor

                                                    @for ($j = $ratenum+1; $j <= 5; $j++)
                                                        <i class="far fa-star"></i>
                                                    @endfor
                                                </div>
                                                <div class="u-s-m-b-8">
                                                    <h4>We want to hear from you!</h4>
                                                </div>

                                                <span class="gl-text">Tell us what you think about this item</span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <form class="pd-tab__rev-f1">
                                                <div class="rev-f1__group">
                                                    <div class="u-s-m-b-15">
                                                        <h2>{{ $reviews->count() }} Review(s) for Man Ruched Floral Applique Tee</h2>
                                                    </div>
                                                    <div class="u-s-m-b-15">

                                                        <label for="sort-review"></label><select
                                                            class="select-box select-box--primary-style" id="sort-review">
                                                            <option selected>Sort by: Best Rating</option>
                                                            <option>Sort by: Worst Rating</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="rev-f1__review">
                                                    <div class="review-o u-s-m-b-15">

                                                        @foreach ($reviews as $data)
                                                            <div class="review-o__info u-s-m-b-8">
                                                                <span class="review-o__name">{{ $data->users->name }}</span>
                                                                <span class="review-o__date">{{ date('d M Y H:i:s', strtotime($data->created_at)) }}</span>
                                                            </div>
                                                            <div class="review-o__rating gl-rating-style u-s-m-b-8">
                                                                @for ($i=1; $i <= $data->stars_rated; $i++)
                                                                    <i class="fas fa-star"></i>
                                                                @endfor

                                                                @for ($j = $data->stars_rated+1; $j <= 5; $j++)
                                                                    <i class="far fa-star"></i>
                                                                @endfor
                                                                <span>({{ $data->stars_rated }})</span>
                                                            </div>
                                                            <p class="review-o__text">
                                                                {{ $data->users_review }}
                                                            </p>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        @if (Auth::check())
                                            <input type="hidden" name="users_id" id="users_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="products_id" id="products_id" value="{{ $products->id }}">

                                            <div class="u-s-m-b-30">
                                                <form class="pd-tab__rev-f2">

                                                    <h2 class="u-s-m-b-15">Add a Review</h2>
                                                    <span class="gl-text u-s-m-b-15">Your email address will not be published. Required fields are marked *</span>

                                                    <div class="u-s-m-b-30">
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
                                                                                <input type="radio" id="stars_rated" name="stars_rated" value="4">
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
                                                    <div class="rev-f2__group">
                                                        <div class="u-s-m-b-15">
                                                            <label class="gl-label" for="reviewer-text">YOUR REVIEW *</label>
                                                            <textarea class="text-area text-area--primary-style" id="users_review" style="height:200px;" name="users_review"></textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn--e-brand-shadow" id="review-btn">SUBMIT</button>
                                                    </div>
                                                </form>
                                            </div>

                                        @endif
                                    </div>
                                </div>
                                <!--====== End - Tab 4 ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Product Detail Tab ======-->
        <div class="u-s-p-b-90">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">CUSTOMER ALSO VIEWED</h1>

                                <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="4">
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product1.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Beats Bomb Wireless Headphone</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(20)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product2.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Red Wireless Headphone</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(20)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product3.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Yellow Wireless Headphone</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(20)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product23.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Razor Gear Ultra Slim 8GB Ram</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(20)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product26.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Razor Gear Ultra Slim 12GB Ram</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(20)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product30.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Razor Gear Ultra Slim 16GB Ram</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(20)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
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

    @if (session('success'))
        <script type="text/javascript">Swal.fire("{{ session('success') }}")</script>
    @endif
@endsection
