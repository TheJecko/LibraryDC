<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{

  //public function __construct(){

   // $this->middleware('auth')->except(['show']);

 // }

     public function index(){

        $posts = Post::all();

        return view('main', compact('posts'));
    }

    public function create(){
    	return view('blog');
    }

     public function store(){

      $this->validate(request(), [
        'bl_title'=> 'required',
        'review' => 'required'
        ]);

      
      auth()->user()->publish(new Post(request(['bl_title', 'review'])));
      
       return redirect('/');
    }

      public function show(Post $post){

        return view('show', compact('post'));
    }
}

