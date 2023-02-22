@extends('layouts.master')
@extends('layouts.app')
@section('title', "Pizza")
@section('main')
<div class="content">
    <img src="img/pizza-logo.png" alt="pizza-logo">
    <div class="title mb-4">
        The Best Pizza in Town
    </div>
    <p class="mssg">
        {{session('mssg')}}
    </p>
    <a href="{{route("pizzas.create")}}" class="order-link">Make Your Order Now</a>
</div>
@endsection