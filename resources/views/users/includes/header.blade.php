<header class="header--style-1 header--box-shadow">

    <!--====== Nav 1 ======-->
    <nav class="primary-nav primary-nav-wrapper--border">
        <div class="container">

            <!--====== Primary Nav ======-->
            <div class="primary-nav">

                <!--====== Main Logo ======-->

                <a class="main-logo" href="index.html">

                    <img src="images/logo/logo-1.png" alt=""></a>
                <!--====== End - Main Logo ======-->


                <!--====== Search Form ======-->
                <form class="main-form">

                    <label for="main-search"></label>

                    <input class="input-text input-text--border-radius input-text--style-1" type="text"
                        id="main-search" placeholder="Search">

                    <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                </form>
                <!--====== End - Search Form ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs"
                        type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Setting">
                                <a><i class="far fa-user-circle"></i></a>
                                <!--====== Dropdown ======-->
                                @if (Route::has('login'))
                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:120px">
                                        @auth
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-lock-open u-s-m-r-6"></i>
                                                    <span>Keluar</span>
                                                </a>
                                            </li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        @else
                                            <li>
                                                <a href="{{ route('register') }}"><i class="fas fa-user-plus u-s-m-r-6"></i>
                                                    <span>Daftar</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('login') }}"><i class="fas fa-lock u-s-m-r-6"></i>
                                                    <span>Masuk</span></a>
                                            </li>
                                        @endauth
                                    </ul>
                                @endif
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">
                                <a href="{{ route('account.dashboard') }}"><i class="fas fa-user-cog"></i></a>
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Contact">
                                <a href="{{ route('kontak.index') }}"><i class="fas fa-phone-volume"></i></a>
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Mail">
                                <a href="mailto:stokisnaturalnusantaraad3043@gmail.com"><i class="far fa-envelope"></i></a>
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Primary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 1 ======-->


    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav">

                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation1">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog"
                        type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                            <li class="has-dropdown">
                                <a>KATALOG<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <ul style="width:200px">
                                    <li class="has-dropdown has-dropdown--ul-left-100">
                                        <a href="{{ url('katalog/produk-nasa') }}">Produk Nasa<i
                                                class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            @foreach ($categories as $category)
                                                @if ($category->total_product > 0)
                                                    <li class="{{ $category->sub_categories->count() > 0 ? 'has-dropdown has-dropdown--ul-left-100' : '' }}">
                                                    <a href="{{ url('katalog/produk-nasa/' . $category->slug) }}">{{ $category->category }} {!! $category->sub_categories->count() > 0 ? "<i class='fas fa-angle-down i-state-right u-s-m-l-6'></i>" : '' !!}</a>
                                                    <!--====== Dropdown ======-->
                                                    <span class="js-menu-toggle"></span>
                                                    <ul style="width:200px">
                                                        @foreach ($subCategories as $subCategory)
                                                            @if ($subCategory->categories_id == $category->id)
                                                                @if ($subCategory->total_product > 0)
                                                                    <li>
                                                                        <a href="{{ url('katalog/produk-nasa/' . $category->slug . '/' . $subCategory->slug) }}">{{ $subCategory->sub_category }}</a>
                                                                    </li>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>
                                        <a href="{{ url('katalog/daftar-harga') }}">Daftar Harga</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('katalog/cara-belanja') }}">Cara Belanja</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('keranjang') }}">Keranjang Belanja</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('katalog/lacak-paket') }}">Lacak Paket</a>
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li class="has-dropdown">
                                <a href="#">PRODUK<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <ul style="width:200px">
                                    <li>
                                        <a href="{{ url('produk/produk-terbaru') }}">Produk Terbaru</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('produk/produk-terlaris') }}">Produk Terlaris</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('produk/produk-pilihan') }}">Produk Pilihan</a>
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li>
                                <a href="{{ url('artikel') }}">ARTIKEL</a>
                            </li>
                            <li class="has-dropdown">
                                <a>KEMITRAAN<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <ul style="width:200px">
                                    <li>
                                        <a href="{{ url('kemitraan/peluang-usaha') }}">Peluang Usaha</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ url('kemitraan/form-pendaftaran') }}">Form Pendaftaran</a>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar-none.html">Ruang Member</a>
                                    </li> --}}
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->

                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation2">

                    <button
                        class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
                        type="button"></button>

                    <span class="total-item-round">2</span>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li>
                                <a href="{{ url('/') }}"><i class="fas fa-home {{ request()->is('dashboard', '/') ? 'u-c-brand' : '' }}"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="{{ url('keranjang') }}"><i class="fas fa-shopping-bag {{ request()->is('keranjang') ? 'u-c-brand' : '' }}"></i></a>
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
</header>
