<?php

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

//  Route::get('sobre', [AnimaisController::class, 'index']);

 Route::get('/', [AnimaisController::class, 'index']);
// Route::resource('/sobre', AnimaisController::class);

Route::get('sobre', function() {
    return view('sobre');
}); 
Route::get('animais', function() {
    return view('animais');
}); 

Route::get('instituicoes', function() {
    return view('instituicoes');
});

Route::get('/cadastro/cadastroAnimais',[AnimaisController::class,'create']);
Route::post('cadastro', [AnimaisController::class,'store']);

