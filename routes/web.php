<?php

use Illuminate\Support\Facades\Route;/*  */

/*
 
*/

 
Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'welcome');/* ruta y vista */
Route::view('/contacto', 'contact');
Route::view('/blog', 'blog');
Route::view('/about', 'about');/* definimos las rutas de tipo get y devolvemos las vistas que se encuentra en las view */