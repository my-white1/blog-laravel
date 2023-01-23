@extends('layouts.main')

@section('main.content')
    <x-title>
        {{ __('Create post') }}
        <x-slot name="link">
            <a href="{{ route('user.posts') }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>

    
    <x-post.form action="{{ route('user.posts.store') }}" >
        <x-button type="submi">
            {{ __('Create Post') }}
        </x-button>
    </x-post.form>

@endsection
