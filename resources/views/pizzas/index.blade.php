@extends('layouts.master')
@extends('layouts.app')
@section('title', "Pizza Orders")
@section('main')
<div class="pizzas-container">
@if (count($pizzas) === 0)
    <div class="title">
        There's no order yet
    </div>
@else
        <div class="title">
            Pizza Orders
        </div>
        @foreach ($pizzas as $pizza)
        <div class="pizza">
            <img src="/img/pizza.png" alt="">
            <p> <a href="{{route("pizzas.show", $pizza->id)}}">{{$pizza->name}}</a>
            </div>
        @endforeach
@endif
</div>
@endsection