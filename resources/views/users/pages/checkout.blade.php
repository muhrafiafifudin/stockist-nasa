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

                                    <a href="index.html">Home</a>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">INFORMASI PENGIRIMAN</h1>
                                <form class="checkout-f__delivery">
                                    <div class="u-s-m-b-30 u-s-m-t-30">
                                        <!--====== First Name, Last Name ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="billing-name">NAMA LENGKAP *</label>
                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-email" data-bill="">
                                        </div>
                                        <!--====== End - First Name, Last Name ======-->

                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="billing-email">E-MAIL *</label>
                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-email" data-bill="">
                                        </div>
                                        <!--====== End - E-MAIL ======-->

                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="billing-phone">NOMOR TELEPON *</label>
                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-phone" data-bill="">
                                        </div>
                                        <!--====== End - PHONE ======-->

                                        <!--====== Province ======-->
                                        <div class="u-s-m-b-15">
                                            <!--====== Select Box ======-->
                                            <label class="gl-label" for="billing-province">PROVINSI *</label><select
                                                class="select-box select-box--primary-style" id="billing-province"
                                                data-bill="">
                                                <option selected value="">Pilih Provinsi</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - Province ======-->

                                        <!--====== Regency ======-->
                                        <div class="u-s-m-b-15">
                                            <!--====== Select Box ======-->
                                            <label class="gl-label" for="billing-regency">KOTA / KABUPATEN *</label><select
                                                class="select-box select-box--primary-style" id="billing-regency"
                                                data-bill="">
                                                <option selected value="">Pilih Kota / Kabupaten</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - Regency ======-->

                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="billing-street">ALAMAT PENGIRIMAN *</label>
                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-street" placeholder="House name and street name"
                                                data-bill="">
                                        </div>
                                        <!--====== End - Street Address ======-->

                                        <!--====== ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-15">
                                            <label class="gl-label" for="billing-zip">KODE POS *</label>
                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-zip" placeholder="Zip/Postal Code" data-bill="">
                                        </div>
                                        <!--====== End - ZIP/POSTAL ======-->

                                        <div class="u-s-m-b-10">
                                            <label class="gl-label" for="order-note">CATATAN</label>
                                            <textarea class="text-area text-area--primary-style" id="order-note"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">RINGKASAN PESANAN</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid"
                                                            src="images/product/electronic/product3.jpg" alt="">
                                                    </div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">Yellow Wireless
                                                                Headphone</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span>
                                                    </div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid"
                                                            src="images/product/electronic/product18.jpg" alt="">
                                                    </div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span>
                                                    </div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid" src="images/product/women/product8.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">New Dress D Nice
                                                                Elegant</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span>
                                                    </div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid" src="images/product/men/product8.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">New Fashion D Nice
                                                                Elegant</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span>
                                                    </div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">TAGIHAN PENGIRIMAN</h1>
                                            <div class="ship-b">

                                                <span class="ship-b__text">Ship to:</span>
                                                <div class="ship-b__box u-s-m-b-10">
                                                    <p class="ship-b__p">4247 Ashford Drive Virginia VA-20006 USA (+0)
                                                        900901904</p>

                                                    <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                                        data-modal="modal" data-modal-id="#edit-ship-address">Edit</a>
                                                </div>
                                                <div class="ship-b__box">

                                                    <span class="ship-b__text">Bill to default billing address</span>

                                                    <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                                        data-modal="modal" data-modal-id="#edit-ship-address">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="o-summary__table">
                                                <tbody>
                                                    <tr>
                                                        <td>BIAYA PENGIRIMAN</td>
                                                        <td>$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PAJAK</td>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SUBTOTAL</td>
                                                        <td>$379.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TOTAL</td>
                                                        <td>$379.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="u-s-m-t-30">
                                                <button class="btn btn--e-brand-b-2" type="submit">PLACE
                                                    ORDER</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Order Summary ======-->
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
