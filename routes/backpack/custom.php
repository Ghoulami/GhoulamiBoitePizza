<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('client', 'ClientCrudController');
}); // this should be the absolute last line of this file