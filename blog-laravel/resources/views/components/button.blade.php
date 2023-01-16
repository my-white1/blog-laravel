<button {{ $attributes->merge(['type' => 'text']) }} class="btn btn-primary mt-2">
    {{ $slot }}
</button>
