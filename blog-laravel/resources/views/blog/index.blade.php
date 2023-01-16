@extends('layouts/base')

@section('content')
    <h1>Blog page</h1>   

    @if (empty($posts))
        No posts
    @else
        @foreach ($posts as $post)
            <div class="mb-4">
                <h5>
                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                </h5>


                <a href="">{{ $post->content }}</a>
            </div>   
        @endforeach
        
    @endif
@endsection