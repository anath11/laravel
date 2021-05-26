<?php

Route::get('/', function () {
  return view('welcome');
});

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');

Route::get('/pizzas/create','App\Http\Controllers\PizzaController@create');

Route::get('/pizzas/{id}', '\App\Http\Controllers\PizzaController@show' );

// POST Request:
Route::post('/pizzas', '\App\Http\Controllers\PizzaController@store');


