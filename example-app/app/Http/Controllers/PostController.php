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
    public function show(Post $post){
        //\Log::debug($id);
        // $post = Post::find($id);
        return view('posts.show' , ['singlepost' =>$post]); 

    }
    public function create(){
        return view ('posts.create');
    }
    public function store(Request $request){
        \Log::debug($request);
        return ("to be implemented");
    }
    //majas izveidot jauno post iekartu datubaze

}
