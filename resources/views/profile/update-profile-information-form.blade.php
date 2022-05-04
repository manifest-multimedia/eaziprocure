
<x-jet-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <x-slot name="title">
           <div class="mt-5">
               {{ __('Profile Information') }}
               </span> 
        </x-slot>
    
        <x-slot name="description">
            {{ __('Update your account\'s profile information and email address.') }}
        </x-slot>
        <div class="row align-items-center">
            <div class="col-md-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                <div x-data="{photoName: null, photoPreview: null}" class="col-md-12">
                    <div class="text-center border border-round p-5">
                        {{-- <div class="avatar avatar-image" style="width: 150px; height:150px"> --}}
                            {{-- <img src="assets/images/avatars/thumb-3.jpg" alt=""> --}}
                            <div  class="col-span-6 sm:col-span-4">
                                <!-- Profile Photo File Input -->
                                <input type="file" class="hidden d-none"
                                            wire:model="photo"
                                            x-ref="photo"
                                            x-on:change="
                                                    photoName = $refs.photo.files[0].name;
                                                    const reader = new FileReader();
                                                    reader.onload = (e) => {
                                                        photoPreview = e.target.result;
                                                    };
                                                    reader.readAsDataURL($refs.photo.files[0]);
                                            " />
                
                                {{-- <x-jet-label for="photo" value="{{ __('Photo') }}" /> --}}
                
                                <!-- Current Profile Photo -->
                                <div class="avatar avatar-image" x-show="! photoPreview" style="width: 150px; height:150px">
                                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                                </div>
                
                                <!-- New Profile Photo Preview -->
                                <div class="avatar avatar-image" x-show="photoPreview" style="width: 150px; height:150px">
                                    <span class="avatar avatar-image"
                                          x-bind:style="'width: 150px; height:150px; background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                                    </span>
                                </div>
                                
                
                                <x-jet-input-error for="photo" class="mt-2" />
                           
                             @endif
                        </div>
                    </div>
                    
                    <div class="row mt-2 pb-2">
                        <div class="col-md-12">
                            {{-- <h2 class="m-b-5">{{Auth::user()->name}}</h2>
                            <p class="text-opacity font-size-13">@Marshallnich</p>
                            <p class="text-dark m-b-20">Frontend Developer, UI/UX Designer</p> --}}
                            <div class="col-md-12">
                                <x-jet-secondary-button class="btn btn-primary btn-block" type="button" x-on:click.prevent="$refs.photo.click()">
                                    {{ __('Select A New Photo') }}
                                </x-jet-secondary-button>
               
                                
                            </div>
                            <div class="col-md-12 mt-2">
                                @if ($this->user->profile_photo_path)
                                <x-jet-secondary-button type="button" class="btn btn-danger btn-block" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-jet-secondary-button>
                            @endif
                        </div>
                                {{-- <button class="btn btn-primary btn-tone">Contact</button> --}}
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-8">
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" type="text" class="mt-1 block w-full form-control" wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
    
               <!-- Email -->
                <div class="col-span-6 sm:col-span-4 mt-2">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" type="email" class="mt-1 block w-full form-control" wire:model.defer="state.email" />
                    <x-jet-input-error for="email" class="mt-2" />
                </div>
            </div>
        </div>
        
    </x-slot>

    <x-slot name="actions">
        <div class="float-right" style="">

            <x-jet-action-message class="mr-3 " on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>
    
            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-form-section>
