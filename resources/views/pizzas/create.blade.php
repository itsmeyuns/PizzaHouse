@extends('layouts.master')
@extends('layouts.app')
@section('title', "Add a New Pizza")
@section('main')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
  <form action="{{route("pizzas.store")}}" method="post">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name">
    <label for="type">Choose pizza type:</label>
    <select name="type" id="type">
      <option value="margherita">Margherita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="pepperoni">Pepperoni</option>
      <option value="volcano">Volcano</option>
      <option value="veg supreme">Veg Supreme</option>
    </select>
    <label for="base">Choose base type:</label>
    <select name="base" id="base">
      <option value="cheesy crust">Cheesy Crust</option>
      <option value="garlic crust">Garlic Crust</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="thick">Thick</option>
    </select>
    <div class="toppings">
      <input type="checkbox" name="toppings[]" value="mushrooms"><label for="Mushrooms">Mushrooms</label><br>
      <input type="checkbox" name="toppings[]" value="onions"><label for="Onions">Onions</label><br>
      <input type="checkbox" name="toppings[]" value="olives"><label for="Olives">Olives</label>
    </div>
    <input type="submit" value="Order Pizza" id="btn">
  </form>
</div>
@endsection
