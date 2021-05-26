@extends('layouts.layout')

@section('content')
<div class="wrapper pizzza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type"> Type - {{ $pizza->type}} </p>
    <p class="base">Base  - {{ $pizza->base }}</p>
    <div class="toppings">Extra toppings:</div>
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div> 
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection