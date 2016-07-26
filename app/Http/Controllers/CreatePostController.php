<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
  public function create(Request $request)
  {
      $this->validate($request, [
        'name'  => 'required',
        'topic' => 'required',
        ]);
    
        $post = new Post;
        $post->name = $request->input('name');
        $post->topic = $request->input('topic');
        $post->save();
      
        return response()->success(compact('post'));      
  }

  public function get()
  {
      $posts = Post::all();  
      //dd($posts);
      //$user = Auth::user();
      return response()->success($posts);
      //return response($posts);
  }

    // public function get()
    // {
    //     $posts = App\Post::get();

    //     return response()
    //     ->success(compact('posts'));
    // }
  
}
