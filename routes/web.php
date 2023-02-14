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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo';
});
*/

Route::get('/', 'App\Http\Controllers\principalController@principal')->name('site.index');
Route::get('/sobrenos', 'App\Http\Controllers\sobrenosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\contatoController@contato')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\contatoController@contato')->name('site.contato');
Route::get('/login', 'App\Http\Controllers\loginController@login')->name('site.login');


Route::prefix('/app')->group(function () {
    Route::get('/cliente', function () {
        return 'Olá, seja bem vindo cliente';
    })->name('app.cliente');
    Route::get('/fornecedor', 'App\Http\Controllers\fornecedorController@index')->name('app.fornecedor');
    Route::get('/produto', function () {
        return 'Olá, seja bem vindo produto';
    })->name('app.produto');
});

Route::get('/teste/{p1}/{p2}','App\Http\Controllers\testeController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota de acessada não existe';
});