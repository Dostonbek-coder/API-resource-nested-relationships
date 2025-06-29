<?php

namespace App\Models;

use PhpParser\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
{
    return $this->hasMany(Comment::class);
}
}

