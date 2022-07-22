@extends('users.layouts.app')

@section('title')
    Form Pendaftaran | Stockist Nasa
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
                                    <a href="#">Kemitraan</a>
                                </li>
                                <li class="is-marked">
                                    <a href="{{ url('kemitraan/form-pendaftaran') }}">Form Pendaftaran</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->

        <!--====== Section 2 ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Content ======-->
            <div class="detail-post mt-2">
                <div class="bp-detail">
                    <div class="bp-detail__info-wrap">
                        <h2 class="u-s-m-b-50">Form Pendaftaran Distributor NASA</h2>

                        <form action="" class="dash-edit-p">
                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Nama Lengkap *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">No. NIK/SIM/Passpor *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Tanggal Lahir *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">No. HP *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Jenis Kelamin *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">Email *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Status Perkawinan *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">Nama Pasangan *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">No. NIK Pasangan *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Alamat *</label>
                                    <textarea class="text-area input-text input-text--primary-style" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Kecamatan *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">Provinsi *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>
                            <div class="gl-inline u-s-m-b-50">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Kab/Kota *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">Kode Pos *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>

                            <hr>

                            <h4 class="u-s-m-b-30">Data Bank (Opstional)</h4>

                            <div class="gl-inline">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Nama Bank *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">No Rekening *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>
                            <div class="gl-inline u-s-m-b-50">
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-fname">Cabang Bank *</label>
                                    <input class="input-text input-text--primary-style" type="date" id="billing-fname" data-bill="">
                                </div>
                                <div class="u-s-m-b-20">
                                    <label class="gl-label" for="billing-lname">Atas Nama *</label>
                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill="">
                                </div>
                            </div>

                            <hr>

                            <div class="statement">
                                <p>PERNYATAAN</p>

                                <ol class="regist__form">
                                    <li>Saya bukan karyawan atau wakil dari PT NASA, tetapi saya adalah seorang wiraswasta yang bermitra dengan PT NASA</li>
                                    <li>Saya mengerti dan menyetujui jika saya telah menjadi Mitra Usaha PT NASA, maka suami/istri saya tidak dibenarkan menjadi seorang Mitra Usaha</li>
                                    <li>Sebagai Mitra Usaha PT NASA, saya tidak dibenarkan untuk mendaftar kembali (Keanggotaan Ganda) dengan alasan apapun</li>
                                </ol>
                            </div>
                            <div class="check-box required">
                                <input type="checkbox" id="remember-me">
                                <div class="check-box__state check-box__state--primary">
                                    <label class="check-box__label" for="remember-me">Saya setuju dengan semua pernyataan yang ada.</label>
                                </div>
                            </div>
                            <div class="u-s-m-t-20 u-s-m-b-60">
                                <button class="btn-main">Daftar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 2 ======-->

    </div>
@endsection
