@extends('users.layouts.app')

@section('title')
    Detail Artikel | Stockist Nasa
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
                                    <a href="{{ url('artikel') }}">Artikel</a>
                                </li>
                                <li class="is-marked">
                                    <a href="signin.html">{{ $articles->title }}</a>
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
                    <!--====== Detail Post ======-->
                    <div class="detail-post mt-2">
                        <div class="bp-detail">
                            <div class="bp-detail__info-wrap">
                                <h2>{{ $articles->title }}</h2>

                                <div class="bp-detail__stat">
                                    <span class="bp-detail__stat-wrap">
                                        <span class="bp-detail__publish-date">
                                            <a href="blog-right-sidebar.html">
                                                <span>25 March 2018</span>
                                            </a>
                                        </span>
                                    </span>
                                    <span class="bp-detail__stat-wrap">
                                        <span class="bp-detail__author">
                                            <a href="blog-right-sidebar.html">Dayle</a>
                                        </span>
                                    </span>
                                    <span class="bp-detail__stat-wrap">
                                        <span class="bp-detail__category">
                                            <a href="blog-right-sidebar.html">Learning</a>
                                            <a href="blog-right-sidebar.html">News</a>
                                            <a href="blog-right-sidebar.html">Health</a>
                                        </span>
                                    </span>
                                </div>

                                <div class="aspect aspect--bg-grey aspect--1366-768 u-s-m-b-20 u-s-m-t-20">
                                    <img class="aspect__img" src="images/blog/post-12.jpg" alt="">
                                </div>

                                {!! $articles->content !!}

                            </div>
                        </div>
                    </div>
                    <!--====== End - Detail Post ======-->
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
