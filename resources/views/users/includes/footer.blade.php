<footer>
    <div class="outer-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="outer-footer__content u-s-m-b-40">
                        <span class="outer-footer__content-title">Hubungi Kami</span>
                        <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>
                            <span>Sidomulyo, Kec. Polanharjo, Klaten, Jawa Tengah</span>
                        </div>
                        <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>
                            <span>+62 896 4931 2293</span>
                        </div>
                        <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>
                            <span>stokisnaturalnusantaraad3043@gmail.com</span>
                        </div>
                        <div class="outer-footer__social">
                            <ul>
                                <li>
                                    <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">
                                <span class="outer-footer__content-title">Informasi</span>
                                <div class="outer-footer__list-wrap">
                                    <ul>
                                        <li>
                                            <a href="{{ url('keranjang') }}">Keranjang</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('akun/beranda') }}">Akun Profil</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('katalog/lacak-paket') }}">Lacak Paket</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">
                                <div class="outer-footer__list-wrap">
                                    <span class="outer-footer__content-title">Halaman</span>
                                    <ul>
                                        <li>
                                            <a href="{{ url('produk') }}">Katalog Produk</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('kemitraan/peluang-usaha') }}">Peluang Usaha</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('artikel') }}">Artikel</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('katalog/cara-belanja') }}">Cara Belanja</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="outer-footer__content">

                        <span class="outer-footer__content-title">Bergabunglah Bersama Kami</span>
                        <form class="newsletter">
                            <div class="u-s-m-b-15">
                                <div class="radio-box newsletter__radio">
                                    <input type="radio" id="male" name="gender">
                                    <div class="radio-box__state radio-box__state--primary">
                                        <label class="radio-box__label" for="male">Laki -laki</label>
                                    </div>
                                </div>
                                <div class="radio-box newsletter__radio">
                                    <input type="radio" id="female" name="gender">
                                    <div class="radio-box__state radio-box__state--primary">
                                        <label class="radio-box__label" for="female">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="newsletter__group">
                                <label for="newsletter"></label>
                                <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Masukkan email anda ...">
                                <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                            </div>
                            <span class="newsletter__text">Berlangganan untuk menerima pembaruan tentang promosi, diskon, dan kupon.</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lower-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="lower-footer__content">
                        <div class="lower-footer__copyright">
                            <span>Copyright © 2022</span>
                            <a href="{{ url('/') }}">Stokis Nasa AD3043</a>
                            <span>All Right Reserved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
