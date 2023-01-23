@extends('layouts.main')

@section('main.content')
    <x-title>
        {{ __('Show Post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts' , $post->id)}}">
                {{ __('Back') }}
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.edit' , $post->id)}}">
                {{ __('Edit') }}
            </x-button-link>
        </x-slot>
    </x-title>

    <h2 class="h4">
        {{ $post->title }}
    </h2>

    <p class="pt-3">
        {!! $post->content !!}
    </p>

    <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s') }}
    </div>
@endsection
