@props(['submit'])

<div {{ $attributes->merge(['class' => 'card']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="card-body">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="px-4 py-1 bg-white sm:p-1  {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
               
                    {{ $form }}
               
            </div>

            @if (isset($actions))
                <div class="px-4 py-1 bg-gray-50 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md" style="float:right;">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
