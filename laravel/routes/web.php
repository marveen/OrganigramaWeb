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


// se crea codigo para uns controlador del tipo recurso 
// el cualexpone mas metodos y construlle mas rapido 
//xambio tres
Route::resource('ContactoWeb', 'ContactoWebController');





Route::get('hello', function () {
    return 'que pasa loco'; 
});


Route::get('hola/{name}', function ($name) {
    return 'que pasa amigo '.$name; 
});

Route::get('doble/{num}', function ($num = 0) {
    
    $varint = 0;
    $varint = 2 * $num;
    return 'El doble de $num es '.$varint; 
});


Route::get('/', function () {
    return view('welcome');
});



