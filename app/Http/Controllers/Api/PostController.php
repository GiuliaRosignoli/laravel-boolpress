<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // get blog posts
    public function index() {
        $posts = Post::paginate(3);

        return response()->json($posts);
    }
}
