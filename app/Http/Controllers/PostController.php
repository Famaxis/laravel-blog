<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('frontend.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('frontend.single',compact('post'));
    }
}
