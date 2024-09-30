<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        //metode kas atgriez visus Post ierakstus
        $posts =Post::all();
        //\Log::debug($posts);
        return view('posts.index' , ['allposts' =>$posts]);
    }
    public function show($id){
        //\Log::debug($id);
        $post = Post::find($id);
        return view('posts.show' , ['singlepost' =>$post]); 

    }

}
