
<x-jet-form-section submit="updateProfileInformation">

   

    <x-slot name="form">
        <x-slot name="title">
            {{ __('Profile Information') }}
        </x-slot>
    
        <x-slot name="description">
            {{-- {{ __('Update your account\'s profile information and email address.') }} --}}
        </x-slot>
        <div class="row align-items-center">
            <div class="col-md-7">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                <div x-data="{photoName: null, photoPreview: null}" class="d-md-flex align-items-center">
                    <div class="text-center text-sm-left ">
                        {{-- <div class="avatar avatar-image" style="width: 150px; height:150px"> --}}
                            {{-- <img src="assets/images/avatars/thumb-3.jpg" alt=""> --}}
                            <div  class="col-span-6 sm:col-span-4">
                                <!-- Profile Photo File Input -->
                                <input type="file" class="hidden"
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
                    <div class="text-center text-sm-left m-v-15 p-l-30">
                        {{-- <h2 class="m-b-5">{{Auth::user()->name}}</h2>
                        <p class="text-opacity font-size-13">@Marshallnich</p>
                        <p class="text-dark m-b-20">Frontend Developer, UI/UX Designer</p> --}}
                        <div class="btn-group">
                            <x-jet-secondary-button class="btn btn-primary btn-tone" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-jet-secondary-button>
            
                            @if ($this->user->profile_photo_path)
                                <x-jet-secondary-button type="button" class="btn btn-danger btn-tone" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-jet-secondary-button>
                            @endif
                            </div>
                            {{-- <button class="btn btn-primary btn-tone">Contact</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="d-md-block d-none border-left col-1"></div>
                    {{-- <div class="col">
                        <ul class="list-unstyled m-t-10">
                            <li class="row">
                                <p class="col-sm-4 col-4 font-weight-semibold text-dark m-b-5">
                                    <i class="m-r-10 text-primary anticon anticon-mail"></i>
                                    <span>Emails: </span> 
                                </p>
                                <p class="col font-weight-semibold"> Marshall123@gmail.com</p>
                            </li>
                            <li class="row">
                                <p class="col-sm-4 col-4 font-weight-semibold text-dark m-b-5">
                                    <i class="m-r-10 text-primary anticon anticon-phone"></i>
                                    <span>Phone: </span> 
                                </p>
                                <p class="col font-weight-semibold"> +12-123-1234</p>
                            </li>
                            <li class="row">
                                <p class="col-sm-4 col-5 font-weight-semibold text-dark m-b-5">
                                    <i class="m-r-10 text-primary anticon anticon-compass"></i>
                                    <span>Location: </span> 
                                </p>
                                <p class="col font-weight-semibold"> Los Angeles, CA</p>
                            </li>
                        </ul>
                        <div class="d-flex font-size-22 m-t-15">
                            <a href="" class="text-gray p-r-20">
                                <i class="anticon anticon-facebook"></i>
                            </a>        
                            <a href="" class="text-gray p-r-20">    
                                <i class="anticon anticon-twitter"></i>
                            </a>
                            <a href="" class="text-gray p-r-20">
                                <i class="anticon anticon-behance"></i>
                            </a> 
                            <a href="" class="text-gray p-r-20">   
                                <i class="anticon anticon-dribbble"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full form-control" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full form-control" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
