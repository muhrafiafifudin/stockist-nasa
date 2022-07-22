@extends('users.layouts.app')

@section('title')
    Lacak Paket | Stockist Nasa
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
                                    <a href="{{ url('katalog/lacak-paket') }}">Lacak Paket</a>
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
            <div class="detail-post">
                <div class="bp-detail">
                    <div class="bp-detail__info-wrap" style="min-height: 30rem">
                        <h3 class="u-s-m-b-14">Lacak Paket</h3>

                        <P class="u-s-m-b-30">Untuk melacak pesanan Anda, masukkan ID pesanan Anda di kotak
                            di bawah ini dan tekan tombol "Lacak". ID ini diberikan kepada Anda pada tanda terima dan
                            dalam email konfirmasi yang seharusnya Anda terima.</P>
                        <form class="dash-track-order">
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="order-id">ID Pesanan *</label>

                                    <input class="input-text input-text--primary-style" type="text"
                                        id="order-id" placeholder="Found in your confirmation email">
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="track-email">Nomor Telepon *</label>

                                    <input class="input-text input-text--primary-style" type="text"
                                        id="track-email" placeholder="Email you used during checkout">
                                </div>
                            </div>

                            <button class="btn btn--e-brand-b-2" type="submit">LACAK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
