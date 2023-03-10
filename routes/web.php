<?php

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
    //return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('sair', 'Auth\LoginController@logout')->name('sair');

Route::resource('autoridades', AutoridadeController::class)->middleware('auth');
Route::resource('formaturas', FormaturaController::class)->middleware('auth');
Route::resource('listas', ListaController::class)->middleware('auth');
Route::resource('titulos', TituloController::class)->middleware('auth');

Route::get('/listas/{formatura}/convidados', 'ListaController@convidados')->name('listas.convidados')->middleware('auth');