<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return  view('posts.create');
    }

    public function store()
    {
        return 'Process the form';
    }
}

// php artisan make:controller PostController -i ------------> Crea un controller invocable (de un solo metodo)
// php artisan make:controller PostController -r -------------> Crea un controller con los 7 metodos rest 
// php artisan make:controller PostController -api ----------> Crea un controller con los metodos api ( store, show , update, destroy)