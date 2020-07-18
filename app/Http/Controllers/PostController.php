<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    //
    public function index()
    {
        //$channels =Channel::all();
        return view('posts.index');
    }
}
