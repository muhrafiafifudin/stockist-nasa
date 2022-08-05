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
                                <li class="has-separator">
                                    <a href="{{ url('akun/alamat') }}">Akun Alamat</a>
                                </li>
                                <li class="is-marked">
                                    <a href="#">Edit Akun Alamat</a>
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
                                                <a href="{{ url('akun/alamat') }}" class="dash-active">Alamat</a>
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
                                        <h1 class="dash__h1 u-s-m-b-14">Edit Alamat</h1>
                                        <span class="dash__text u-s-m-b-30">Ubah alamat sesuai dengan kebutuhan anda.</span>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="{{ route('account.update-address', $users->id) }}" class="dash-edit-p" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="province">Provinsi</label>
                                                            <select class="select-box select-box--primary-style u-w-100" name="provinces_id" id="province">
                                                                <option selected>Pilih Provinsi</option>
                                                            </select>
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="regency">Kota / Kabupaten</label>
                                                            <select class="select-box select-box--primary-style u-w-100" name="cities_id" id="regency">
                                                                <option selected>Pilih Kota / Kabupaten</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="address">Alamat</label>
                                                            <input class="input-text input-text--primary-style" name="address" type="text" id="address" value="{{ $users->address }}" placeholder="Masukkan alamat ...">
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="postcode">Kode Pos</label>
                                                            <input class="input-text input-text--primary-style" name="postcode" type="text" id="postcode" value="{{ $users->postcode }}" placeholder="Masukkan kode pos ...">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12 u-s-m-t-30">
                                                            <div class="u-s-m-b-16">
                                                                <button type="submit" class="dash__custom-link btn--e-brand-b-2">Simpan</button>
                                                                <a class="dash__custom-link btn--e-transparent-brand-b-2 u-s-m-l-10" href="{{ url('akun/profil') }}">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
