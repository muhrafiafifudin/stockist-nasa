@extends('users.layouts.app')

@section('title')
    Masuk | Stockist Nasa
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
                                    <a href="signin.html">Masuk</a>
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

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">SUDAH TERDAFTAR ?</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">MASUK</h1>

                                    <span class="gl-text u-s-m-b-30">Jika Anda memiliki akun dengan kami, silakan masuk.</span>
                                    <form class="l-f-o__form" action="{{ route('login') }}" method="POST">
                                        @csrf

                                        <div class="gl-s-api">
                                            <div class="u-s-m-b-30">
                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                        class="fab fa-google"></i>
                                                    <span>Masuk dengan Google</span></button>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="login-email">E-MAIL *</label>
                                            <input class="input-text input-text--primary-style" type="email"
                                                id="login-email" placeholder="Masukkan E-mail" name="email">
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="login-password">PASSWORD *</label>
                                            <input class="input-text input-text--primary-style" type="password"
                                                id="login-password" placeholder="Masukkan Password" name="password">
                                        </div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">
                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">MASUK</button>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <a class="gl-link" href="lost-password.html">Lupa Password ?</a>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <!--====== Check Box ======-->
                                            <div class="check-box">
                                                <input type="checkbox" id="remember-me">
                                                <div class="check-box__state check-box__state--primary">
                                                    <label class="check-box__label" for="remember-me">Ingatkan Saya</label>
                                                </div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </div>
                                    </form>
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
