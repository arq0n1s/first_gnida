<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
       
        $posts = Post::where('likes','>',1000)->get();
        echo "the most powerfull posts <br>";
        foreach($posts as $post){
            dump($post->id, $post->name);
        }
        dd('end, blya');

    }

public function create(){

    $postsArr =[
        [
            'name' =>'another title of post from chizdamasinsk',
            'description' =>'another some interesting',
            'image' => 'imagelablabla.jpg',
            'likes' => 20,
            'is_posted' => 1,
        ],
        [
            'name' =>'another new suka title of post',
            'description' =>'the most interesting post',
            'image' => 'imginea_putulicai.jpg',
            'likes' => 230,
            'is_posted' => 1,
        ]
    ];

    foreach($postsArr as $item){
        Post::create($item);
    }

    dd('created post');
}


public function update(){

    $post = Post::find(3);

    $post->update([
        'name' => 'schijmash ebanii',
        'description' => 'ya pierdole, te curvo ebane',
        'image' => 'pscudito_pedrilito.jpg',
        'likes' => 7584,
        'is_posted' => 1,
    ]);

    dd('updated');
}


public function delete(){

    $post = Post::withTrashed()->find(2);
    $post->restore();

    dd('delete post');

}


// firstOtCreate 
// updateOrCreate 

public function firstOrCreate(){

    $post = Post::find(1);

    $anotherPost = [
        'name' => 'some post',
        'description' => 'some content',
        'image' => 'piperony.jpg',
        'likes' => 253425,
        'is_posted' => 1,
    ];

    $post = Post::firstOrCreate([
        'name'=>'some post'
    ],[
        'name' => 'some post',
        'description' => 'some content',
        'image' => 'piperony.jpg',
        'likes' => 253425,
        'is_posted' => 1,
    ]);

    dump($post->description);
    dd('finished');
    
}

public function updateOrCreate(){

    $anotherPost = [
        'name' => 'ceboksari style',
        'description' => 'new changed content',
        'image' => 'cebo_nigga.jpg',
        'likes' => 14235,
        'is_posted' => 0,
    ];

    $post = Post::updateOrCreate([
        'name'=>'ceboksari style'
    ],[
        'name' => 'ceboksari style',
        'description' => 'new changed content',
        'image' => 'cebo_nigga.jpg',
        'likes' => 14235,
        'is_posted' => 0,
    ]);

    dump($post->name);
    dd('finished');
    
}


}
