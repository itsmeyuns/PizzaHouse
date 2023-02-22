<?php 

namespace App\Http\Controllers;
use App\Models\Pizza;
use Illuminate\Http\Client\Request;

class PizzaController {

  public static function index()
  {

    $pizzas = Pizza::latest()->get();
    return view('pizzas.index', ['pizzas' => $pizzas]);

  }

  public static function show($id) {

    // Show pizza details
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);

  }


  public static function create() {

    // Show the form for order a pizza
    return view('pizzas.create');

  }

  public static function store() {

    //create a new pizza record
    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');

    // save the model to the data base
    $pizza->save();

    return redirect("/")->with("mssg", "Thanks For Your Order :) ");

  }

  public static function destroy($id)
  {
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();
    return redirect("/pizzas");
  }


}




?>