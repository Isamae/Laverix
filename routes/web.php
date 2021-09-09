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
});

Auth::routes();

Route::get('/login/administrador', 'App\Http\Controllers\LoginController@showAdminLoginForm');

Route::post('/login/administrador', 'App\Http\Controllers\LoginController@adminLogin');


Route::group(['middleware' => 'auth:usuario'], function () {

    Route::view('/administrador', 'admin',['tipoLogin' => 'administrador'])->name('administrador');

    Route::get('usuario/create', 'App\Http\Controllers\UsuarioController@create');
    Route::get('usuario/show-usuarios', 'App\Http\Controllers\UsuarioController@index');
    Route::get('usuario/show/{id}', 'App\Http\Controllers\UsuarioController@show');
    Route::get('usuario/edit/{id}', 'App\Http\Controllers\UsuarioController@edit');
    Route::get('usuario/update', 'App\Http\Controllers\UsuarioController@update');
    Route::get('usuario/short-usuarios', 'App\Http\Controllers\UsuarioController@indexFiltering');

    Route::post('usuario/strore', 'App\Http\Controllers\UsuarioController@store');
    Route::post('usuario/destroy/{id}', 'App\Http\Controllers\UsuarioController@destroy');
    
    
});

Route::get('logout', 'App\Http\Controllers\LoginController@logout');