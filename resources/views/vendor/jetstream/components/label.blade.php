@props(['value'])

<label {{ $attributes->merge(['class' => 'font-weight-semibold']) }}>
    {{ $value ?? $slot }}
</label>
