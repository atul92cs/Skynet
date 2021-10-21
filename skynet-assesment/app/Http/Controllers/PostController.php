<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
   public function createPost(Request $request)
   {
        $this->validate($request,[
            'userId'=>'required|numeric',
            'title'=>'required|string',
            'body'=>'required|string'
        ]);
        $post=new Post;
        $post->userId=$request->userId;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return redirect('/')->with('success','Post Created');
   }
   public function deletePost($id)
   {
        $post=Post::find($id);
        $post->delete();
        return redirect('/')->with('success','Post deleted');
   }
   public function getPost($id)
   {
        $post=Post::find($id);
        return view('updatepost',['post'=>$post]);
   }
   public function updatePost(Request $request)
   {
        $this->validate($request,[
             'id'=>'required|numeric',
            'userId'=>'required|numeric',
            'title'=>'required|string',
            'body'=>'required|string'
        ]);
        $id=$request->id;
        $post=Post::find($id);
       // $post->id=$request->id;
        $post->userId=$request->userId;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return redirect('/')->with('success','post updated');
   }
}
