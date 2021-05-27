<?php

Route::get('/', function () {
  return view('welcome');
});

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create','App\Http\Controllers\PizzaController@create')->name('pizzas.create');

Route::get('/pizzas/{id}', '\App\Http\Controllers\PizzaController@show')->name('pizzas.show')->middleware('auth');

// POST Request:
Route::post('/pizzas', '\App\Http\Controllers\PizzaController@store')->name('pizzas.store');

// DELETE Request
Route::delete('/pizzas/{id}', '\App\Http\Controllers\PizzaController@destory')->name('pizzas.destory')->middleware('auth');

/**
 * While running this project drop the price column from the database
 * =>show Database;
 * =>use pizzahouse;
 * =>describe pizzas; // This will list all the tables row and columns
 * => alter table pizzas
 *  drop column price; 
 */



Auth::routes([
  'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

