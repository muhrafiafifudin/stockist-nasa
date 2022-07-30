@extends('users.layouts.app')

@section('title')
    Cara Belanja | Stockist Nasa
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
                                <li class="has-separator">
                                    <a href="#">Cara Belanja</a>
                                </li>
                                <li class="is-marked">
                                    <a href="{{ url('kemitraan/peluang-usaha') }}">Cara Order Mitra Nasa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">
            <!--====== Detail Post ======-->
            <div class="detail-post mt-2">
                <div class="bp-detail u-s-m-b-60">
                    <div class="bp-detail__info-wrap">
                        <h2 class="u-s-m-b-20">Cara Belanja</h2>

                        <p class="u-s-m-b-30">
                            StockistNasa.com disiapkan sebagai tempat belanja online produk Nasa untuk Umum maupun Mitra Usaha Nasa dimanapun berada. Bagi Anda Mitra Distributor Nasa,
                            kami sudah siapkan fitur khusus untuk Anda, Silahkan buka halaman Cara Order Mitra Distributor Nasa !
                        </p>

                        <h3 class="u-s-m-b-20">Cara Belanja Produk Nasa</h3>

                        <h5 class="u-s-m-b-5">1. Order Produk Nasa Sistem Online</h5>

                        <p class="u-s-m-b-5">
                            Nikmati kemudahan dan keuntungan belanja produk Nasa dengan sistem online di Stockist Nasa. Anda akan mendapatkan Kupon Diskon ketika Anda mendaftar akun dan login.
                            Silahkan Login / Buat Akun sekarang !
                        </p>

                        <p class="u-s-m-b-5">Untuk melakukan pemesanan menggunakan sistem toko online, Langkahnya adalah:</p>

                        <ol class="list u-s-m-b-20">
                            <li>
                                Buka halaman produk yang ingin Anda pesan, Bisa Anda buka melalui halaman Toko Nasa atau Katalog Produk Nasa.
                            </li>
                            <li>
                                Klik tombol <strong>Tambah ke Keranjang</strong> untuk belanja lebih dari 1 barang, atau tombol <strong>Beli Sekarang</strong> untuk langsung <strong>Checkout</strong>.
                            </li>
                            <li>
                                Jika ingin tambah produk lain, klik <strong>LANJUTKAN BELANJA</strong>, dan cari produk lain yang akan Anda order, selanjutnya lakukan Langkah 2.
                            </li>
                            <li>
                                Silahkan periksa produk, jumlah dan harganya pada Keranjang Belanja Anda. Setelah OK, klik tombol <strong>Konfirmasi Pesanan</strong> dan akan masuk halaman
                                <strong>Checkout.</strong>
                            </li>
                            <li>
                                Isi data Anda untuk pengiriman barang. Total biaya dan ongkir akan terisi otomatis.
                            </li>
                            <li>
                                Pilih metode pembayaran yang Anda inginkan, bisa via transfer Bank atau pembayaran instant melalui <strong>QRIS</strong>
                                untuk Anda yang menggunakan aplikasi Dompet Digital maupun Mobile Banking.
                            </li>
                            <li>
                                Silahkan lakukan pembayaran sesuai dengan Pesanan Anda, dan sebelum itu anda akan mengisikan alamat dan kurir yang mengantar.
                            </li>
                            <li>
                                Tunggu hingga paket datang ke alamat tujuan anda, anda bisa mengecek secara berkala pada menu pesanan yang ada di halaman <strong>AKUN</strong>
                            </li>
                        </ol>

                        <h5 class="u-s-m-b-5">2. Order Produk Nasa melalui WhatsApp</h5>

                        <p class="u-s-m-b-5">
                            Untuk Anda Mitra Distributor Nasa yang lebih suka order via WhatApp, Silahkan bisa langsung kontak Admin kami melalui tombol WhatsApp.
                        </p>

                        <p class="u-s-m-b-5">
                            Nomor-Nomor Yang kami gunakan untuk pelayanan adalah:
                        </p>

                        <ul class="list u-s-m-b-5">
                            <li>
                                <strong>+62 896 4931 2293</strong> – Telp / SMS / WA
                            </li>
                        </ul>

                        <p class="u-s-m-b-5">
                            Selamat Berbelanja..
                        </p>

                        <p class="u-s-m-b-30">
                            Salam Sukses.. dan Semangat Pagi..!
                        </p>

                        <h3 class="u-s-m-b-10">Info Terkait Pemesanan Produk Nasa</h3>

                        <h5 class="u-s-m-b-5">1. Nomor Pelayanan</h5>

                        <p class="u-s-m-b-5">
                            Nomor-Nomor Yang kami gunakan untuk pelayanan adalah:
                        </p>

                        <ul class="list u-s-m-b-20">
                            <li>
                                <strong>+62 896 4931 2293</strong> – Telp / SMS / WA
                            </li>
                        </ul>

                        <h5 class="u-s-m-b-5">2. Bank Pembayaran</h5>

                        <p class="u-s-m-b-5">
                            Bank yang kami gunakan untuk transaksi di Stockist Nasa adalah:
                        </p>

                        <ul class="list u-s-m-b-20">
                            <li>
                                <strong>+62 896 4931 2293</strong> – Telp / SMS / WA
                            </li>
                        </ul>

                        <h5 class="u-s-m-b-5">3. Jasa Pengiriman</h5>

                        <p class="u-s-m-b-5">
                            Untuk pengiriman barang, kami menggunakan jasa pihak ketiga seperti POS / JNE / J&T / Sicepat / ID Express atau jasa pengiriman lainnya yang ada ke alamat Anda atau sesuai pilihan/kesepakatan.
                        </p>

                        <p>
                            Atas kerjasama dan kepercayaan Anda terhadap Produk Natural Nusantara dan kami ucapkan terima kasih.
                        </p>
                    </div>
                </div>
            </div>
            <!--====== End - Detail Post ======-->
        </div>

    </div>
@endsection
