<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{

    public function home() 
    {
        $fromCache = false;
        if (Cache::store('redis')->has('posts')) {
            $posts = Cache::store('redis')->get('posts');
            $fromCache = true;
        } else {
            $posts = Post::all();
            Cache::store('redis')->put('posts', $posts, 3600);
        }

        return view('posts', [
            'posts' => $posts,
            'fromCache' =>  $fromCache
        ]);
    }

    public function index()
    {
        return Post::all();
    }

    public function show(Post $post)
    {
        return $post;
    }
}
