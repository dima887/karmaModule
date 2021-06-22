@extends('layouts::layouts.layout')

@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 class="text-dark">Блог</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{route('home')}}" class="text-dark">Главная<span class="lnr
                        lnr-arrow-right"></span></a>
                        <a href="{{route('blog')}}" class="text-dark">Блог. Все посты</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                @foreach($categoryLimitThree as $val)
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="storage/{{$val->thumbnail}}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html">
                                        <h5>{{$val->category}}</h5>
                                    </a>
                                    <div class="border_line"></div>
                                    <p>Enjoy your social life together</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach($post as $val)
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Категория: {{$val->category}}</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{$val->name}}<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">{{$val->updated_at}}<i class="lnr
                                        lnr-calendar-full"></i></a></li>
                                        <li><a href="#">{{$val->view}} Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">{{$val->comments_count}} комментариев<i class="lnr
                                        lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="storage/{{$val->thumbnail}}" alt="">
                                    <div class="blog_details">
                                        <h2>{{$val->title}}</h2>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="{{route('blog.post', ['id' => $val->id])}}"
                                           class="white_bg_btn">Читать
                                            дальше</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{$post->links()}}
                        </nav>
                    </div>
                </div>

                    @include('layouts::blogSidebar')

            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection
