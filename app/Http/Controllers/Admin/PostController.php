<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'content' => request('content'),
            'slug'    => Carbon::now()->format('Y-m-d-His'),
        ]);

        return redirect()->route('posts');
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts');
    }
}
