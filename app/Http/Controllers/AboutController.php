<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Post;

class AboutController extends Controller
{
    public function index(){
       
        // $posts = Post::where('likes','>',1000)->get();
        // echo "the most powerfull posts <br>";
        // foreach($posts as $post){
        //     dump($post->id, $post->name);
        // }

        // $posts = Post::all();
        return view('about');
        
        // dd($posts);

    }
}