<button {{ $attributes->merge(['type' => 'button', 'class' => 'w-full']) }}>
    {{ $slot }}
</button>
