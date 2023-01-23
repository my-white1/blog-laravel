<div class="border-bottom pb-3 mb-4">

    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset

    <div class="d-flex justify-content-between">
        <h1 class=" h2 mb-5">
            {{ $slot }}
        </h1>

        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>
</div>