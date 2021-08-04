<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
