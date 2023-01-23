<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Login') }}
        </x-card-title>

        <x-slot name="right">
            <a href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </x-slot>
    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('login.store') }}" method="post">
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email" required autofocus />
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('password') }}</x-label>
                <x-input type="password" name="password" required />
            </x-form-item>

            <x-form-item class="form-check">
                <x-checkbox name="agreement">
                    {{ __('agreement') }}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit">
                {{ __('Login') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>