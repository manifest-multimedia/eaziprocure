<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-primary col-12']) }}>
    {{ $slot }}
</button>
