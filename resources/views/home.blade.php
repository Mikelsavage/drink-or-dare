@extends('app', ['page_class' => 'home'])


@section('main')
    <div class="text-center container">
        <div class="m-auto">
            <h1 class="mb-med">DRINK or DARE</h1>
            <div class="options">
                <div class="option"><p>Create Game</p></div>
                <div class="option"><p>Join Game</p></div>
                <div class="option"><p>Instructions</p></div>
                <div class="option"><p>More</p></div>
            </div>
        </div>
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop
