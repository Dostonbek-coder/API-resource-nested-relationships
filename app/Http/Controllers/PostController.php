<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post; 
use App\Http\Resources\PostResource; 
class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with('comments.author')->findOrFail($id); // comments va muallif yuklanadi
        return new PostResource($post);
    }
}
