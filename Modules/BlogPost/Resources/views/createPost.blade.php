@extends('layouts::layouts.layout')

@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 class="text-dark">Добавление нового поста</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{route('home')}}" class="text-dark">Главная<span class="lnr
                        lnr-arrow-right"></span></a>
                        <a href="{{route('blog')}}" class="text-dark">Блог. Все посты<span class="lnr
                        lnr-arrow-right"></span></a>
                        <a href="{{route('blog.post.create')}}" class="text-dark">Создать пост</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <div class="container">
        <h2 class="mb-5">Добавить пост</h2>

        @include('layouts::alerts')
            <form class="row contact_form" action="{{route('blog.post.story', ['user_id' => auth()->user()->id])}}"
                  method="post" id="contactForm"
                  novalidate="novalidate" enctype="multipart/form-data">
                @csrf


                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="thumbnail">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" id="thumbnail"
                                           class="custom-file-input">
                                    <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Категория поста</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="title">Заголовок</label>
                        <textarea class="form-control" name="title" id="title" rows=""
                                  placeholder="заголовок" onfocus="this.placeholder = ''"
                                  onblur="this
                                  .placeholder = 'заголовок'">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="post">Пост</label>
                        <textarea class="form-control" name="post" id="post" rows=""
                                  placeholder="Пост" onfocus="this.placeholder = ''"
                                  onblur="this
                                  .placeholder = 'пост'">

                        </textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="primary-btn">Отправить</button>
                </div>
            </form>
    </div>
@endsection
