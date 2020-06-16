<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return view('welcome');})->name('accueil');

Route::get('/menu', function () {return view('menu');})->name('menu');
Route::get('/about', function () {return view('about');})->name('about');

Route::get('/shopping_cart', 'CartController@getShoppingCart')->name('Shopping_cart');


Route::get('/order', 'ProduitController@indexProduiut')->name('order');
Route::get('/add-to-cart/{id}', 'ProduitController@getAddToCart')->name('addToCart');
Route::get('/RemoveProduct/{id}', 'ProduitController@getRemoveProduct')->name('RemoveProduct');
Route::get('/about_prod/{id}', 'ProduitController@getPoduit')->name('about_prod');


Route::post('/add-to-cart/{produit_id}', 'SupplementController@postAddSupplimentAndProductToCart')->name('AddSupplimentAndProductToCart');
Route::get('/RemoveSupplement/{id}', 'SupplementController@getRemoveSupplement')->name('RemoveSupplement');

Route::post('/comment_prod/{client_id}/{produit_id}', 'commentaireController@postComment')->name('post_comment');

Route::resource('/checkout', 'CheckoutController')->only(['index' , 'store']);
Auth::routes();

Route::get('/merci', function () {return view('thankyou');});
Route::get('/print', 'InvoiceController@printInvoice')->name('printInvoice');
