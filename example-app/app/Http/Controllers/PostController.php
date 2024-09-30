<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        //metode kas atgriez visus Post ierakstus
        $posts =Post::all();
        return view('posts.index' , ['allposts' =>$posts]);
    }

}
