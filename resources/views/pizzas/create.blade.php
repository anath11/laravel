@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Creaete a  New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="Indian">Indian</option>
            <option value="Newyorker">Newyorker</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Indonesian">Indonesian</option>
        </select>

        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="Chicken crust">Chicken crust</option>
            <option value="Garlic crust">Garlic crust</option>
            <option value="Cheesy crust">Cheesy crust</option>
            <option value="Pineapple crust">Pineapple crust</option>
            <option value="Apple crust">Apple crust</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label> <br/>
            <input type="checkbox" name="toppings[]" value="mushroom">Mushtoom<br/>
            <input type="checkbox" name="toppings[]" value="pepers">Pepers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection