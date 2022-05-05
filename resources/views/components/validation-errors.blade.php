    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 alert alert-danger">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 alert alert-danger" style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
