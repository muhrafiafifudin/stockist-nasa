@extends('users.layouts.app')

@section('title')
    Invoice | Stockist Nasa
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
                                <li class="is-marked">

                                    <a href="checkout.html">Invoice</a>
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

                                <form action="{{ url('invoice/' . $transactions->order_number) }}" id="submit_form" method="POST">
                                    @csrf

                                    <input type="hidden" name="json" id="json_callback">
                                </form>

                                <h1 class="checkout-f__h1">KONFIRMASI PEMBAYARAN</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <div class="ship-b">

                                                <span class="ship-b__text">Nama Lengkap :</span>
                                                <div class="invoice__box u-s-m-b-10">
                                                    <p class="invoice__p">{{ $transactions->name }}</p>
                                                </div>

                                                <span class="ship-b__text">Email :</span>
                                                <div class="invoice__box u-s-m-b-10">
                                                    <p class="invoice__p">{{ $transactions->email }}</p>
                                                </div>

                                                <span class="ship-b__text">Nomor Telepon :</span>
                                                <div class="invoice__box u-s-m-b-40">
                                                    <p class="invoice__p">{{ $transactions->phone_number }}</p>
                                                </div>

                                                <span class="ship-b__text">Alamat Lengkap :</span>
                                                <div class="invoice__box u-s-m-b-40">
                                                    <p class="invoice__p">{{ $transactions->address . ", " . $transactions->postcode }}</p>
                                                    <p class="invoice__p">{{ $addresses['city_name'] . ", " . $addresses['province'] }}</p>
                                                </div>

                                                <span class="ship-b__text">Pengiriman :</span>
                                                <div class="invoice__box u-s-m-b-10">
                                                    <p class="invoice__p">Pengiriman menggunakan kurir {{ $transactions->courier }}</p>
                                                    <p class="invoice__p">Estimasi pengiriman paket sekitar {{ $transactions->estimate }}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Order Summary ======-->

                            </div>
                            <div class="col-lg-6">

                                <h1 class="checkout-f__h1">RINGKASAN PESANAN</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            @foreach ($transactions->transactionDetails as $item)
                                                <div class="o-card">
                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">
                                                            <img class="u-img-fluid" src="{{ asset('admin/img/product/' . $item->products->images) }}" alt="">
                                                        </div>
                                                        <div class="o-card__info-wrap">
                                                            <span class="o-card__name">
                                                                <a href="{{ url('produk/' . $item->products->categories->slug . '/' . $item->products->slug) }}">{{ $item->products->name }}</a></span>
                                                            <span class="o-card__quantity">Jumlah x {{ $item->qty }}</span>
                                                            <span class="o-card__price">Rp. {{ number_format($item->products->price, 2, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="o-summary__table u-s-m-b-30">
                                                <tbody>
                                                    <tr>
                                                        <td>SUBTOTAL</td>
                                                        <td>Rp. {{ number_format($transactions->subtotal, 2, ',', '.') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BERAT BARANG</td>
                                                        <td>{{ number_format($transactions->weight, 0, ',', '.') }} gram</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BIAYA PENGIRIMAN</td>
                                                        <td>Rp. {{ number_format($transactions->shipping, 2, ',', '.') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BIAYA PENANGANAN</td>
                                                        <td>Rp. 0,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TOTAL</td>
                                                        <td>Rp. {{ number_format($transactions->total, 2, ',', '.') }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <button class="btn btn--e-brand-b-2" id="pay-button">PEMBAYARAN</button>
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

@push('scripts')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                    send_response_to_form(result);
                },
                onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        function send_response_to_form(result)
        {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
    </script>
@endpush
