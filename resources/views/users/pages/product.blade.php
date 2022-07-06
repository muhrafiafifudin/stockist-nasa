@extends('users.layouts.app')

@section('title')
    Produk | Stockist Nasa
@endsection

@section('content')
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-p">
                            <div class="shop-p__toolbar u-s-m-b-30">
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
                            </div>
                            <div class="shop-p__collection">
                                <div class="row is-grid-active">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">

                                                    <img class="aspect__img" src="images/product/men/product6.jpg"
                                                        alt=""></a>
                                                <div class="product-m__add-cart">

                                                    <a class="btn--e-brand" data-modal="modal"
                                                        data-modal-id="#add-to-cart">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">

                                                    <a href="shop-side-version-2.html">Men Clothing</a>
                                                </div>
                                                <div class="product-m__name">

                                                    <a href="product-detail.html">New Fashion B Nice Elegant</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i
                                                        class="far fa-star"></i><i class="far fa-star"></i>

                                                    <span class="product-m__review">(23)</span>
                                                </div>
                                                <div class="product-m__price">$125.00</div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">

                                                        <span>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a type
                                                            specimen book.</span>
                                                    </div>
                                                    <div class="product-m__wishlist">

                                                        <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                            data-placement="top" title="Add to Wishlist"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">

                                                    <img class="aspect__img" src="images/product/women/product5.jpg"
                                                        alt=""></a>
                                                <div class="product-m__add-cart">

                                                    <a class="btn--e-brand" data-modal="modal"
                                                        data-modal-id="#add-to-cart">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">

                                                    <a href="shop-side-version-2.html">Women Clothing</a>
                                                </div>
                                                <div class="product-m__name">

                                                    <a href="product-detail.html">New Dress A Nice Elegant</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i
                                                        class="far fa-star"></i><i class="far fa-star"></i>

                                                    <span class="product-m__review">(23)</span>
                                                </div>
                                                <div class="product-m__price">$125.00</div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">

                                                        <span>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a type
                                                            specimen book.</span>
                                                    </div>
                                                    <div class="product-m__wishlist">

                                                        <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                            data-placement="top" title="Add to Wishlist"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">

                                                    <img class="aspect__img" src="images/product/women/product6.jpg"
                                                        alt=""></a>
                                                <div class="product-m__add-cart">

                                                    <a class="btn--e-brand" data-modal="modal"
                                                        data-modal-id="#add-to-cart">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">

                                                    <a href="shop-side-version-2.html">Women Clothing</a>
                                                </div>
                                                <div class="product-m__name">

                                                    <a href="product-detail.html">New Dress B Nice Elegant</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style"><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i
                                                        class="far fa-star"></i>

                                                    <span class="product-m__review">(23)</span>
                                                </div>
                                                <div class="product-m__price">$125.00</div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">

                                                        <span>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a type
                                                            specimen book.</span>
                                                    </div>
                                                    <div class="product-m__wishlist">

                                                        <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                            data-placement="top" title="Add to Wishlist"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">

                                                    <img class="aspect__img" src="images/product/women/product7.jpg"
                                                        alt=""></a>
                                                <div class="product-m__add-cart">

                                                    <a class="btn--e-brand" data-modal="modal"
                                                        data-modal-id="#add-to-cart">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">

                                                    <a href="shop-side-version-2.html">Women Clothing</a>
                                                </div>
                                                <div class="product-m__name">

                                                    <a href="product-detail.html">New Dress C Nice Elegant</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style"><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i
                                                        class="far fa-star"></i>

                                                    <span class="product-m__review">(23)</span>
                                                </div>
                                                <div class="product-m__price">$125.00</div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">

                                                        <span>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a type
                                                            specimen book.</span>
                                                    </div>
                                                    <div class="product-m__wishlist">

                                                        <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                            data-placement="top" title="Add to Wishlist"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        </div>
        <!--====== End - Section 1 ======-->
    </div>
@endsection
