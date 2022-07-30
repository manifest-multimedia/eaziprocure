{{-- <div class="md:grid md:grid-cols-3 md:gap-6" {{ $attributes }}> --}}
<div class="card px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg" {{ $attributes }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="m-20">
        <div class="">
            {{ $content }}
        </div>
    </div>
</div>
