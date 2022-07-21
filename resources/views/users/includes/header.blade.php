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
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                title="Account">
                                <a><i class="far fa-user-circle"></i></a>
                                <!--====== Dropdown ======-->
                                @if (Route::has('login'))
                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    @auth
                                    <li>
                                        <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>
                                        <span>Account</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-lock-open u-s-m-r-6"></i>
                                        <span>Keluar</span></a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                title="Settings">

                                <a><i class="fas fa-user-cog"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a class="u-c-brand">ENGLISH</a>
                                            </li>
                                            <li>

                                                <a>ARABIC</a>
                                            </li>
                                            <li>

                                                <a>FRANCAIS</a>
                                            </li>
                                            <li>

                                                <a>ESPANOL</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:225px">
                                            <li>

                                                <a class="u-c-brand">$ - US DOLLAR</a>
                                            </li>
                                            <li>

                                                <a>£ - BRITISH POUND STERLING</a>
                                            </li>
                                            <li>

                                                <a>€ - EURO</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a>
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a>
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
                                        <a href="{{ url('produk') }}">Produk Nasa<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a>Agrokompleks<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>
                                                        <a href="dash-edit-profile.html">Pertanian</a>
                                                    </li>
                                                    <li>
                                                        <a href="dash-address-book.html">Peternakan</a>
                                                    </li>
                                                    <li>
                                                        <a href="dash-manage-order.html">Perikanan</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li>
                                                <a href="index-2.html">Body Care</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Care</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Kesehatan</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Kosmetik</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Skin Care</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>
                                        <a href="blog-right-sidebar.html">Daftar Harga</a>
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">
                                        <a>Cara Belanja<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>
                                                <a href="{{ url('katalog/cara-belanja/cara-order-mitra-nasa') }}">Cara Order Mitra NASA</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
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
                                        <a href="blog-left-sidebar.html">Produk Unggulan</a>
                                    </li>
                                    <li>
                                        <a href="blog-right-sidebar.html">Produk Terbaru</a>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar-none.html">Produk Terlaris</a>
                                    </li>
                                    <li>
                                        <a href="blog-masonry.html">Produk Pilihan</a>
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li>
                                <a href="#">ARTIKEL</a>
                            </li>
                            <li class="has-dropdown">
                                <a>KEMITRAAN<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <ul style="width:200px">
                                    <li>
                                        <a href="{{ url('kemitraan/peluang-usaha') }}">Peluang Usaha</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kemitraan/form-pendaftaran') }}">Form Pendaftaran</a>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar-none.html">Ruang Member</a>
                                    </li>
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
                                <a href="{{ url('dashboard') }}"><i class="fas fa-home {{ request()->is('dashboard') ? 'u-c-brand' : ''}}"></i></a>
                            </li>
                            <li>
                                <a href="wishlist.html"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="{{ url('keranjang') }}"><i class="fas fa-shopping-bag {{ request()->is('keranjang') ? 'u-c-brand' : ''}}"></i></a>
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
