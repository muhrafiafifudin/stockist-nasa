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

                                    <a href="#">Akun Profil</a>
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
                                                <a  href="{{ url('akun/beranda') }}">Beranda</a>
                                            </li>
                                            <li>
                                                <a class="dash-active">Profil Saya</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('akun/pesanan') }}">Pesanan</a>
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
                                <div class="dash__box dash__box--shadow dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Kelola Profil</h1>
                                        <span class="dash__text u-s-m-b-30">Informasi mengenai profil anda.</span>
                                        <div class="row">
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Nama Lengkap</h2>
                                                <span class="dash__text">{{ Auth::user()->name }}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>
                                                <span class="dash__text">{{ Auth::user()->email }}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Nomor Telepon</h2>
                                                <span class="dash__text">{{ Auth::user()->phone_number }}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Provinsi, Kota</h2>
                                                <span class="dash__text">{{ Auth::user()->cities_id == NULL ? '' : $addresses['city_name'] }}, {{ Auth::user()->provinces_id == NULL ? '' : $addresses['province'] }}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Alamat</h2>
                                                <span class="dash__text">{{ Auth::user()->address }}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Kode Pos</h2>
                                                <span class="dash__text">{{ Auth::user()->postcode }}</span>
                                            </div>
                                        </div>
                                        <div class="row u-s-m-t-30">
                                            <div class="col-lg-12">
                                                <div class="u-s-m-b-16">
                                                    <a class="dash__custom-link btn--e-transparent-brand-b-2" href="{{ url('akun/edit-profil/' . Auth::user()->id) }}">Edit Profil</a>
                                                </div>
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
