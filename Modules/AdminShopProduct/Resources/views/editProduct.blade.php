@extends('layouts::AdminLayouts.layout')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Товары</h1>
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
                    <h3 class="card-title">Изменить товар</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route('admin.product.update', ['id' => $id])}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Название товара</label>
                            <textarea name="title" class="form-control" id="title"
                                      rows="1">{{old('title')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Категория товара</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach($data['category'] as $value)
                                    <option value="{{$value->id}}">{{$value->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Бренд товара</label>
                            <select name="brand_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach($data['brand'] as $value)
                                    <option value="{{$value->id}}">{{$value->brand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание товара</label>
                            <textarea name="description" class="form-control" id="description"
                                      rows="1">{{old('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Цена товара</label>
                            <textarea name="price" class="form-control" id="price"
                                      rows="1">{{old('price')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="count">Количество товара</label>
                            <textarea name="count" class="form-control" id="count"
                                      rows="1">{{old('count')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail[]" id="thumbnail"
                                           class="custom-file-input" multiple>
                                    <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </form>

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
