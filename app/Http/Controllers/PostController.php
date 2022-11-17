<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
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
        return  view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
         
        
         

        Post::create($request->validated());
             

        

        return to_route('posts.index')->with('status', 'Post created!');
    }

    public function edit(Post $post)

    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)

    {
        
        
        

        $post->update($request->validated());

         

        return to_route('posts.show' , $post)->with('status', 'Post update');
    }

    public function destroy(Post $post)

    {
        $post->delete();

        return to_route('posts.index')->with('status','Post deleted');
    }


}

// php artisan make:controller PostController -i ------------> Crea un controller invocable (de un solo metodo)
// php artisan make:controller PostController -r -------------> Crea un controller con los 7 metodos rest 
// php artisan make:controller PostController -api ----------> Crea un controller con los metodos api ( store, show , update, destroy)