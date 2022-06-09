<?php

use App\Http\Controllers\AbrigosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimaisController;
use App\Models\AnimaisModel;

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
// Route::resource('/pagina-inicial', AnimaisController::class);
// Route::get('/', [AnimaisController::class, 'index'])->name('pagina-inicial');

Route::resource('/instituicoes', AbrigosController::class);
Route::get('/instituicoes', [AbrigosController::class, 'index']);

//  Route::get('sobre', [AnimaisController::class, 'index']);

 Route::get('/', [AnimaisController::class, 'index']);
// Route::resource('/sobre', AnimaisController::class);

Route::get('sobre', function() {
    return view('sobre');
}); 
Route::get('animais', function() {
    return view('animais');
}); 


Route::resource('/animais', AnimaisController::class);
Route::get('/cadastro/cadastroAnimais',[AnimaisController::class,'create']);
Route::post('cadastro', [AnimaisController::class,'store']);






Route::resource('/instituicoes', AbrigosController::class);


Route::get('/cadastro/cadastroInstituicao',[AbrigosController::class,'create'])->name('Instituicao-create');
Route::post('/cadastro/cadastroInstituicao', [AbrigosController::class,'store'])->name('Instituicao-store');
