@extends('layouts.master')
@extends('layouts.app')
@section('title', "Pizza Details")
@section('main')
<div class="wrapper pizza-details">
    <h1>Order for <span>{{$pizza->name}}</span></h1>
    <p class="type">Type : {{$pizza->type}}</p>
    <p class="base">Base : {{$pizza->base}}</p>
    @isset($pizza->toppings)
    <p class="toppings">Extra toppings : </p>
    <ul>
        @foreach ($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
    </ul>
    @endisset
    <form action="{{route("pizzas.destroy", $pizza->id)}}" method="POST" >
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="{{route("pizzas.index")}}" class="back"><- Back to all pizzas</a>
@endsection