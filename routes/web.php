<?php

use Illuminate\Support\Facades\Route;/*  */

/*
 
*/

 
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome')->name('home');/* ruta y vista */
Route::view('/contact', 'contact')->name('contact');/* estamos ingresando al nombre de la ruta en vez de la url */
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');/* definimos las rutas de tipo get y devolvemos las vistas que se encuentra en las view */