<div class="card-body border-bottom">
    <div class="d-flex justify-content-between">
    {{ $slot }}

    <div>
        @isset($right)
            {{ $right }}
        @endisset
        </div>
    </div>
</div>
