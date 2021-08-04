<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;


class PostsController extends Controller
{
    public function index() 
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'asc')->get();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        
        $posts = Post::latest()->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }


    public function create()
    {
        return view('posts.create');
    }

    // Route ----> Controller(create method) ----> Form -----> Controller(store method) ---> redirect to home page.
    public function store() 
    {
        // 1ere facon
        // $post = new Post;   // Creation d'une instance, qui elle-meme va creer des objets

        // $post->title = request('title'); //'title' et 'body' ici sont des variables inscrivant dans la forme, qui vont passer leurs valeurs dans la base de donnees a l'aide des champs title et body. Ensuite, enregistrent ces valeurs dans l'objet $post. 
        // $post->body = request('body');
        // dd($post);
        // $post->save();
        // return redirect('/');

        $this->validate(request(),[
            'title' => 'required|min:5', 

            'body' => 'required'
        ]);
        // 2eme facon
        Post::create([
            'title' => request('title'),

            'body' => request('body')
        ]);

    }
    
    public function show(Post $post) 
    {
        
        return view('posts.show', [
            'post' => $post
        ]);
    }
    
 
}
