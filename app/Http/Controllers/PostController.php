<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    //
    public function index()
    {
//        $channels =Post::all();
        return view('posts.index');
    }
}
