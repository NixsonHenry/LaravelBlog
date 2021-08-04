<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post) 
    {

        $this->validate(request(), [

            'body' => 'required|min:5',
        ]);

        // Add a comment to a post --> 1ere facon

        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $post->id
        //  ]);

        // 2e facon
        $post->addComment(request('body'));
        
        return back();
    }


}
