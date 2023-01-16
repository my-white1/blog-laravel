@extends('layouts.auth')

@section('auth.content')
<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Login') }}
        </x-card-title>
    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('login.store') }}" method="post">
            @csrf
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email" required autofocus />
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('password') }}</x-label>
                <x-input type="password" name="password" required />
            </x-form-item>

            <x-form-item class="form-check">
                <x-checkbox>
                    {{ __('Remember') }}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit">
                {{ __('Login') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>
@endsection
