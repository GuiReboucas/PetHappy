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
    return view('abrigo');
});

Route::get('pagina-inicial', function() {
    return view('PetHappy.pagina-inicial');
});

Route::get('sobre', function() {
    return view('sobre');
});
