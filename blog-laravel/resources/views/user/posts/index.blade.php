@extends('layouts.main')

@section('main.content')
    <x-title>
        {{ __('My Posts') }}
        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create') }}">
                {{ __('Create') }}
            </x-button-link>
        </x-slot>
    </x-title>
    @if (empty($posts))
        {{ __('No posts') }}
    @else
        @foreach ($posts as $post)
            <div class="mb-3">
                <h2 class="h6">
                    <a href="{{ route('user.posts.show' , $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <div class="small text-muted">
                    {{ now()->format('d.m.Y H:i:s') }}
                </div>
            </div>
        @endforeach
    @endif
@endsection
