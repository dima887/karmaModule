@extends('layouts::layouts.layout')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('layouts.name') !!}
    </p>
@endsection
