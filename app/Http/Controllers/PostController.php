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

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required' , 'min:4'],

        ]);
        
        $post = new Post;

        $post->title = $request->input('title');

        $post->body = $request->input('body');

        $post->save();

        session()->flash('status', 'Post created');

        return to_route('posts.index');
    }

    public function edit(Post $post)

    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update()

    {
        return ' Edit hola';
    }


}

// php artisan make:controller PostController -i ------------> Crea un controller invocable (de un solo metodo)
// php artisan make:controller PostController -r -------------> Crea un controller con los 7 metodos rest 
// php artisan make:controller PostController -api ----------> Crea un controller con los metodos api ( store, show , update, destroy)