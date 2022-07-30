<x-neptune-layout>
    <x-slot name="title">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> --}}
           Commerce Box &mdash; {{ __('User Profile') }}
        {{-- </h2> --}}
    </x-slot>

     
        <div class="page-header">
            <h2 class="header-title">Profile</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    {{-- <a href="#" class="breadcrumb-item"><i class="anticon anticon-user m-r-5"></i>User Profile</a> --}}
                    {{-- <a class="breadcrumb-item" href="#">Pages</a>
                    <span class="breadcrumb-item active">Profile</span> --}}
                </nav>
            </div>
        </div>
        <div>
            <div class=" ">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
    
                    <x-jet-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
    
                    <x-jet-section-border />
                @endif
    {{-- Working On These --}}
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
    
                    <x-jet-section-border />
                @endif
    
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />
    
                    {{-- <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div> --}}
                @endif
            </div>
        </div>
       

</x-neptune-layout>
