<x-jet-action-section>
    <x-slot name="title">
        {{ __('Two Factor Authentication') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Add additional security to your account using two factor authentication.') }}
    </x-slot>

    <x-slot name="content">
        <h5 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('You have enabled two factor authentication.') }}
            @else
                {{ __('Add an extra layer of security to your account by enabling two factor authentication') }}
            @endif
        </h5>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <div class="alert alert-success">
                            <p class="font-semibold text-white">
                            {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                        </p>
                            </div> 
                    </div>
    
                    <div class="mt-4">
                        {!! $this->user->twoFactorQrCodeSvg() !!}
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
                
            @endif
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    @if ($showingRecoveryCodes)
                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <p class="font-semibold">
                            {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                        </p>
                    </div>
    
                    <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                        @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                            <div>{{ $code }}</div>
                        @endforeach
                    </div>
                @endif
                </div>
                <div class="col-md-2"></div>
            </div>
           
        @endif

        <div class="mt-5 row">
           <div class="col-md-3">
            @if (! $this->enabled)
            <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                <x-jet-button type="button" wire:loading.attr="disabled">
                    {{ __('Enable') }}
                </x-jet-button>
            </x-jet-confirms-password>
        @else
            @if ($showingRecoveryCodes)
                <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                    <x-jet-secondary-button class="mr-3 btn btn-primary">
                        {{ __('Regenerate Recovery Codes') }}
                    </x-jet-secondary-button>
                </x-jet-confirms-password>
            @else
                <x-jet-confirms-password wire:then="showRecoveryCodes">
                    <x-jet-secondary-button class="mr-3 btn btn-primary">
                        {{ __('Show Recovery Codes') }}
                    </x-jet-secondary-button>
                </x-jet-confirms-password>
            @endif
           </div>

                <div class="col-md-3">

                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                         
                            <x-jet-danger-button wire:loading.attr="disabled">
                                {{ __('Disable') }}
                            </x-jet-danger-button>
                        
                    </x-jet-confirms-password>
                </div>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
