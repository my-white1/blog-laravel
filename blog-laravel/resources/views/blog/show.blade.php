@extends('layouts.main')


@section('main.content')
    <x-title>
        {{ $post->title }}

        <x-slot name="link">
            <a href="{{ route('blog') }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>
   
    {!! $post->content !!}

@endsection
