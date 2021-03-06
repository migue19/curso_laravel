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
    return view('welcome');
});


Route::get('/hola-mundo',function(){
	return 'Hola Mundo!!, Soy Miguel Mexicano';
});


/*Route::get('/contacto',function(){
	return view('contacto');
});*/

Route::get('/contacto/{nombre?}/{edad?}',function($nombre = "Miguel",$edad = 26){
	/*return view('contacto',array(
		"nombre" => $nombre,
		"edad" => $edad
	));*/

	//puede ser con . o /
	return view('contacto/contacto')
			->with('nombre',$nombre)
			->with('edad',$edad);

})->where([
	'nombre' => '[A-Za-z]+',
	'edad' => '[0-9]+'
]);