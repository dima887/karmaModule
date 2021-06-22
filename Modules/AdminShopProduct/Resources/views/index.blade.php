@extends('layouts::AdminLayouts.layout')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Товар</h1>
                        {{$product->links()}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Категории</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body" wfd-id="98">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Товар</th>
                                <th>Описание</th>
                                <th>slug</th>
                                <th>Категория</th>
                                <th>Бренд</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Цвет</th>
                                <th>Просмотры</th>
                                <th>Лайки</th>
                                <th>Добавлено</th>
                                <th>Обновлено</th>
                                <th>Изображение</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->description}}</td>
                                    <td>{{$value->slug}}</td>
                                    <td>{{$value->category->category}}</td>
                                    <td>{{$value->brand->brand}}</td>
                                    <td>{{$value->price}}</td>
                                    <td>{{$value->count}}</td>
                                    <td>{{$value->color}}</td>
                                    <td>{{$value->view}}</td>
                                    <td>{{$value->likes}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->updated_at}}</td>
                                    <td class="text-center">
                                        @foreach($value->thumbnail as $value2)
                                            <img class="my-img-size" src="/storage/{{$value2}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('admin.product.edit', ['id' => $value->id])}}">
                                            <button type="button" class="btn btn-block btn-info"
                                                    wfd-id="544">Редактировать</button></a>
                                    </td>

                                    <td>
                                        <form action="{{route('admin.product.destroy', ['id'=> $value->id])}}"
                                              method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-danger"
                                                    wfd-id="44" value="submit">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$product->links()}}
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
