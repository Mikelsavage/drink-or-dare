@extends('app', ['page_class' => 'home'])


@section('content')
    <h1>DRINK or DARE</h1>
    <p><b>Dare 1:</b> Dare someone to do something</p>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop
