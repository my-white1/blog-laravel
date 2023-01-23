@extends('layouts.main')

@section('main.content')
    <x-title>
        {{ __('Posts') }}
    </x-title>

    @include('blog.filter')

    @if (empty($posts))
        {{ __('No posts') }}
    @else
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                    <div class="mb-4">
                        <x-card>
                            <x-card-body>
                                <x-post.card :post="$post" />
                            </x-card-body>
                        </x-card>
                    </div>
                </div>
                @endforeach
        </div>
    @endif
@endsection
