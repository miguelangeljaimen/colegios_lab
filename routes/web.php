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
    return view('app.index');
});

Auth::routes(

);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/colegio', function(){
	return view('app.colegio.index');
});

Route::get('/flujo', function(){
	return view('app.flujo.index');
});

Route::get('/perfil', function(){
	return view('app.perfil.index');
});





Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::resource('publicaciones','ProductoController');

