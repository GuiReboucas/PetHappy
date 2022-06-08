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

Route::get('/', function() {
    return view('pagina-inicial');
})->name('pagina-inicial.view');

Route::get('sobre', function() {
    return view('sobre');
})->name('sobre.view'); 

Route::get('instituicoes', function() {
    return view('instituicoes');
});

// Rota temporaría apenas para demonstração
Route::get('usuario-show', function() {
    return view('usuario.show');
})->name('usuario.show');

Route::get('relatorio', function() {
    return view('relatorio');
})->name('relatorio');