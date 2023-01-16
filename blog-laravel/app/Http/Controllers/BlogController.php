<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        
        $post = (object) [
            'id' => 124,
            'title' =>' Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident assumenda nisi enim, accusantium voluptates ad.a',
        ];

        $posts = array_fill(0 , 10 ,$post);


        return view('blog.index' , compact('posts'));
    }

    public function show($post){

        $post = (object) [
            'id' => 124,
            'title' =>' Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident assumenda nisi enim, accusantium voluptates ad.a',
        ];
        
        return view('blog.show' , compact('post'));
    }
    
    public function like($post){
        return "add one like to {$post}";
    }
}
