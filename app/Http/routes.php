
<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/
Route::get('/','FrontController@index');
Route::get('contact','FrontController@contact');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');
Route::get('usuario/usuario', 'UsuarioController@index');

Route::resource('movie', 'MovieController', ['only' => [
    'index', 'show', 'create'
]]);
Route::resource('movie', 'MovieController', ['except' => [
    'store', 'update', 'destroy'
]]);

Route::resource('front', 'FrontController', ['only' => [
    'index', 'contact', 'reviews'
]]);
Route::resource('front', 'FrontController', ['except' => [
    'store', 'update', 'destroy'
]]);

Route::resource('usuario', 'UsuarioController');
Route::resource('genero', 'GeneroController');
Route::resource('log', 'LoginController');
Route::get('genero/{$id}/edit', 'GeneroController@edit');
Route::delete('genero/{$id}', 'GeneroController@destroy');
Route::get('logout', 'LoginController@logout');
Route::get('generos', 'GeneroController@listing');