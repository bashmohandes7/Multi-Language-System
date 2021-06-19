<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get(); // return all posts
        return view('welcome', compact('posts'));
    }
    public function newPost(Request $request)
    {
        Post::create([
            'title' => serialize($request->title),
            'body' => serialize($request->body)
        ]);
        return redirect()->back();
    }
}
