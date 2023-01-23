<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 124,
            'title' =>' Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident assumenda nisi enim, accusantium voluptates ad.a',
        ];

        $posts = array_fill(0 , 10 ,$post);


        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        // $title = $request->input('title');
        // $content = $request->input('content');
        // dd($title , $content);

        return redirect()->route('user.posts.show' , 123);
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 124,
            'title' =>' Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident assumenda nisi enim, accusantium voluptates ad.a',
        ];
        

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => 124,
            'title' =>' Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident assumenda nisi enim, accusantium voluptates ad.a',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request , $post)
    {
        // $title = $request->input('title');
        // $content = $request->input('content');
        // dd($title , $content);
        // return 'update';

        session(['alert' => __('Saved :)')]);

        return redirect()->route('user.posts.show' , $post);
        
    }   

    public function delete($post)
    {
        // return 'delete';
        return redirect()->route('user.posts');

    }

    public function like()
    {
        return 'like + 1';
    }
}

