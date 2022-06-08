<?php

use App\Http\Controllers\AbrigosController;
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
    return view('PetHappy/abrigos');
});

Route::get('pagina-inicial', function() {
    return view('PetHappy.pagina-inicial');
});

Route::get('sobre', function() {
    return view('sobre');
});

Route::prefix('abrigos')->group(function(){
    Route::get('/', [AbrigosController::class, 'index'])->name('abrigos-index');
    Route::get('/create', [AbrigosController::class, 'create'])->name('abrigos-create');
    Route::post('/', [AbrigosController::class, 'store'])->name('abrigos-store');
    Route::get('/{id}/edit', [AbrigosController::class, 'edit'])->where('id','[0-9]+')->name('abrigos-edit');
    Route::put('/{id}', [AbrigosController::class, 'update'])->where('id','[0-9]+')->name('abrigos-update');
    Route::delete('/{id}', [AbrigosController::class, 'destroy'])->where('id','[0-9]+')->name('abrigos-destroy');
    Route::get('/{id}', [AbrigosController::class, 'show'])->name('abrigos-show');
});
