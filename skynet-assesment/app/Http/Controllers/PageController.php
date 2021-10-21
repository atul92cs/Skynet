<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPosts()
    {
        $posts=Post::simplePaginate(5);
        return view('postpage',['posts'=>$posts]);
    }
    public function editPost()
    {

    }
    public function createPost()
    {

    }
    
}
