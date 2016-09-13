<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('controlador','PruebaController@uno');
Route::get('name/{nombre}','PruebaController@dos');
// rutas para controladores restfull
Route::resource('movie','MovieController');

*/

/*Rutas basicas
Route::get('prueba',function(){
	return "hola desde routes.php";
});

route::get('nombre/{nombre}',function ($nombre){
	return 'mi nombre es: '.$nombre;
});
route::get('edad/{edad}',function ($edad){
	return 'mi edad es de: '.$edad.' años ';
});

route::get('edad2/{edad?}',function ($edad=20){
	return 'mi edad es de: '.$edad.' años ';
});

*/



Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

Route::resource('usuario','UsuarioController');
