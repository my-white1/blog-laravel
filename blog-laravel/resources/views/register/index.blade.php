@extends('layouts.auth')

@section('auth.content')
<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Register') }}
        </x-card-title>
    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('register.store') }}" method="post">
            @csrf
            <x-form-item>
                <x-label required>{{ __('Name') }}</x-label>
                <x-input name="name" required autofocus />
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email" required />
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('Password') }}</x-label>
                <x-input type="password" name="password" required />
            </x-form-item> 
            <x-form-item>
                <x-label required>{{ __('Password confirmation') }}</x-label>
                <x-input type="email" name="email" required />
            </x-form-item> 

            <x-form-item class="form-check">
                <x-checkbox>
                    {{ __('Polisity polic') }}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit">
                {{ __('Login') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>
@endsection