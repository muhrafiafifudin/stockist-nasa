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
                                <li class="is-marked">
                                    <a href="#">Daftar Harga</a>
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
                        <h2 class="u-s-m-b-20">Daftar Harga Produk Nasa Pulau Jawa</h2>

                        <p class="u-s-m-b-30">
                            Daftar Harga Produk Nasa  Terbaru dari PT Natural Nusantara untuk konsumen wilayah Jawa dan online ke seluruh Indonesia per {{ date('d M Y') }} (Updated).
                        </p>

                        <table class="table-price-list">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>KODE</th>
                                    <th>NAMA PRODUK</th>
                                    <th>ISI</th>
                                    <th>HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    @if ($category->total_product > 0)
                                        <tr>
                                            <td class="bg-gray"></td>
                                            <td class="bg-gray" colspan="5">PRODUK {{ strtoupper($category->category) }}</td>
                                        </tr>

                                        @php $no = 1; @endphp

                                        @foreach ($products as $product)
                                            @if ($product->categories_id == $category->id)
                                                <tr class="text-center">
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $product->product_code }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ number_format($product->weight, 0, ',', '.') }} gram</td>
                                                    <td>Rp. {{ number_format($product->price, 2, ',', '.') }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <p class="u-s-m-b-10 u-s-m-t-30">
                            Keterangan : Harga Produk Nasa  di atas merupakan harga minimal (Harga Eceran Ter-rendah) untuk
                            konsumen wilayah Jawa yang diputuskan secara resmi oleh PT Natural Nusantara. Wilayah Jawa meliputi
                            provinsi Banten, DKI Jakarta, Jawa Barat, Jawa Tengah, Daerah Istimewa Yogyakarta dan Jawa Timur.
                        </p>
                    </div>
                </div>
            </div>
            <!--====== End - Detail Post ======-->
        </div>

    </div>
@endsection
