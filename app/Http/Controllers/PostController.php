<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function createPost(Request $request)
    {
        $post = Post::create([
            "post_text" => $request->post_text,
            "user_id" => $request->user_id,
        ]);
        return response()->json(["post" => $post, "status" => 201], 201);

    }
    public function getPosts(Request $request)
    {
        $posts = Post::all();
        return response()->json(["posts" => $posts, "status" => 200], 200);
    }
}