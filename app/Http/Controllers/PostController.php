<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'First post'],
            ['title' => 'Second post'],
            ['title' => 'Third post'],
            ['title' => 'Fourth post'],
        ];

        return view('blog', ['posts' => $posts]);
    }
}

// php artisan make:controller PostController -i ------------> Crea un controller invocable (de un solo metodo)
// php artisan make:controller PostController -r -------------> Crea un controller con los 7 metodos rest 
// php artisan make:controller PostController -api ----------> Crea un controller con los metodos api ( store, show , update, destroy)