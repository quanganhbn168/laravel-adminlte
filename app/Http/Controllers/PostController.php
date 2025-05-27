<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function postByCate()
    {
        return view('frontend.posts.postByCate');
    }

    public function detail()
    {
        return view('frontend.posts.detail');
    }
    
    
}
