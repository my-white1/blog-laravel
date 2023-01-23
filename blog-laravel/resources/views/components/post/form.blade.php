@props(['post' => null])




<x-form {{ $attributes }}>
    <x-form-item>
        <x-label required>
            {{ __('Post title') }}
        </x-label>
        <x-input name="title" value="{{ $post->title ?? ''}}" autofocus />
    </x-form-item>
    <x-form-item>
        <x-label required>
            {{ __('Post Content') }}
        </x-label>
        <x-trix name="content" value="{{ $post->content ?? ''}}" />
    </x-form-item>

    {{ $slot }}
</x-form>