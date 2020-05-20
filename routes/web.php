<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

//Route::get('/pizzas', 'ProduitController@indexPizzas')->name('pizzas');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/order', 'ProduitController@indexProduiut')->name('order');
Route::get('/add-to-cart/{id}', 'ProduitController@getAddToCart')->name('addToCart');
Route::get('/shopping_cart', 'ProduitController@getShoppingCart')->name('Shopping_cart');
Route::get('/removeToCart/{id}', 'ProduitController@getRemoveToCart')->name('RemoveToCart');



Route::get('/about_prod', function () {
    return view('infos');
})->name('about_prod');

