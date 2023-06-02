<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'title', 'price', 'image')->paginate(10);

        return view('list', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post', compact('post'));
    }
}
