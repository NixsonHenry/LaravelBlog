<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        // 1ere facon
        $this->comments()->create(compact('body'));

        // 2eme facon

        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);
    }

}
