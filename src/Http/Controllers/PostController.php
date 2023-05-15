<?php

namespace Aleksshar\Posts\Http\Controllers;

use Aleksshar\Posts\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        Post::create(['title' => 'test']);
        $posts = Post::all();
        return view('posts::index', [
            'posts'=> $posts,
            'test' => "From controller"
        ]);
    }
}
