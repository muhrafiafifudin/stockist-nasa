@extends('users.layouts.app')

@section('title')
    Artikel | Stockist Nasa
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
                                    <a href="{{ url('artikel') }}">Artikel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->

        <!--====== Section 2 ======-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @foreach ($articles as $article)
                        <div class="bp bp--img u-s-m-b-30">
                            <div class="bp__wrap">
                                <div class="bp__thumbnail">
                                    <!--====== Image Code ======-->
                                    <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="{{ url('artikel/' . $article->slug) }}">
                                        <img class="aspect__img" src="images/blog/post-2.jpg" alt=""></a>
                                    <!--====== End - Image Code ======-->
                                </div>
                                <div class="bp__info-wrap">
                                    <div class="bp__stat">
                                        <span class="bp__stat-wrap">
                                            <span class="bp__publish-date">
                                                <a href="blog-sidebar-none.html">
                                                    <span>{{ date('d M Y', strtotime($article->created_at)) }}</span>
                                                </a>
                                            </span>
                                        </span>

                                        <span class="bp__stat-wrap">
                                            <span class="bp__author">
                                                <a href="{{ url('artikel/' . $article->slug) }}">{{ $article->admins->name }}</a>
                                            </span>
                                        </span>

                                        <span class="bp__stat-wrap">
                                            <span class="bp__comment">
                                                <a href="{{ url('artikel/' . $article->slug) }}">
                                                    <i class="far fa-comments u-s-m-r-4"></i>
                                                    <span>8</span>
                                                </a>
                                            </span>
                                        </span>

                                        <span class="bp__stat-wrap">
                                            <span class="bp__category">
                                                <a href="blog-sidebar-none.html">Learning</a>
                                                <a href="blog-sidebar-none.html">News</a>
                                                <a href="blog-sidebar-none.html">Health</a>
                                            </span>
                                        </span>
                                    </div>

                                    <span class="bp__h1">
                                        <a href="{{ url('artikel/' . $article->slug) }}">{{ $article->title }}</a>
                                    </span>

                                    <span class="bp__h2">A post with the image</span>

                                    <div class="blog-t-w">
                                        <a class="gl-tag btn--e-transparent-hover-brand-b-2"
                                            href="blog-sidebar-none.html">Travel</a>
                                        <a class="gl-tag btn--e-transparent-hover-brand-b-2"
                                            href="blog-sidebar-none.html">Culture</a>
                                        <a class="gl-tag btn--e-transparent-hover-brand-b-2"
                                            href="blog-sidebar-none.html">Place</a>
                                    </div>

                                    <p class="bp__p">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text.</p>

                                    <div class="gl-l-r">
                                        <div>
                                            <span class="bp__read-more">
                                                <a href="{{ url('artikel/' . $article->slug) }}">READ MORE</a>
                                            </span>
                                        </div>
                                        <ul class="bp__social-list">
                                            <li>
                                                <a class="s-fb--color" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="s-tw--color" href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="s-insta--color" href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a class="s-wa--color" href="#"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li>
                                                <a class="s-gplus--color" href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <nav class="post-center-wrap u-s-p-y-60">

                        <!--====== Pagination ======-->
                        <ul class="blog-pg">
                            <li class="blog-pg--active">

                                <a href="blog-sidebar-none.html">1</a>
                            </li>
                            <li>

                                <a href="blog-sidebar-none.html">2</a>
                            </li>
                            <li>

                                <a href="blog-sidebar-none.html">3</a>
                            </li>
                            <li>

                                <a href="blog-sidebar-none.html">4</a>
                            </li>
                            <li>

                                <a class="fas fa-angle-right" href="blog-sidebar-none.html"></a>
                            </li>
                        </ul>
                        <!--====== End - Pagination ======-->
                    </nav>
                </div>
            </div>
        </div>
        <!--====== End - Section 2 ======-->
    </div>
@endsection
