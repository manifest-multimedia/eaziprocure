<x-backend-layout>
    <x-slot name="title">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> --}}
           EaziProcure &mdash; {{ __('User Profile') }}
        {{-- </h2> --}}
    </x-slot>

     
        <div class="page-header">
            <h2 class="header-title">Profile</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-user m-r-5"></i>User Profile</a>
                    {{-- <a class="breadcrumb-item" href="#">Pages</a>
                    <span class="breadcrumb-item active">Profile</span> --}}
                </nav>
            </div>
        </div>

       
        <div class="container">
            
            {{-- <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Bio</h5>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>
                            <hr>
                            <h5>Specialilty</h5>
                            <h5 class="m-t-20">
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Sketch</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Marvel</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Photoshop</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Illustrator</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Web Design</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Mobile App Design</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">User Interface</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">User Experience</span>
                            </h5>
                            <hr>
                            <h5>Experices</h5>
                            <div class="m-t-20">
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/adobe-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">UI/UX Designer, Adobe Inc.</h6>
                                        <span class="font-size-13 text-gray">Jul 2018</span>
                                    </div>
                                </div>
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/amazon-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">Product Developer, Amazon.com Inc.</h6>
                                        <span class="font-size-13 text-gray">Jul-2017 - Jul 2018</span>
                                    </div>
                                </div>
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/nvidia-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">Interface Designer, Nvidia Corporation</h6>
                                        <span class="font-size-13 text-gray">Jul-2016 - Jul 2017</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Education</h5>
                            <div class="m-t-20">
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/cambridge-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">MSt in Social Innovation, Cambridge University</h6>
                                        <span class="font-size-13 text-gray">Jul-2012 - Jul 2016</span>
                                    </div>
                                </div>
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/phillips-academy-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">Phillips Academy</h6>
                                        <span class="font-size-13 text-gray">Jul-2005 - Jul 2011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5>Reviews (18)</h5>
                            <div class="m-t-20">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-h-0">
                                        <div class="media m-b-15">
                                            <div class="avatar avatar-image">
                                                <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                            </div>
                                            <div class="media-body m-l-20">
                                                <h6 class="m-b-0">
                                                    <a href="" class="text-dark">Lillian Stone</a>
                                                </h6>
                                                <span class="font-size-13 text-gray">28th Jul 2018</span>
                                            </div>
                                        </div>
                                        <span>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.</span>
                                        <div class="star-rating m-t-15">
                                            <input type="radio" id="star1-5" name="rating-1" value="5" checked disabled/><label for="star1-5" title="5 star"></label>
                                            <input type="radio" id="star1-4" name="rating-1" value="4" disabled/><label for="star1-4" title="4 star"></label>
                                            <input type="radio" id="star1-3" name="rating-1" value="3" disabled/><label for="star1-3" title="3 star"></label>
                                            <input type="radio" id="star1-2" name="rating-1" value="2" disabled/><label for="star1-2" title="2 star"></label>
                                            <input type="radio" id="star1-1" name="rating-1" value="1" disabled/><label for="star1-1" title="1 star"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="media m-b-15">
                                            <div class="avatar avatar-image">
                                                <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                            </div>
                                            <div class="media-body m-l-20">
                                                <h6 class="m-b-0">
                                                    <a href="" class="text-dark">Victor Terry</a>
                                                </h6>
                                                <span class="font-size-13 text-gray">28th Jul 2018</span>
                                            </div>
                                        </div>
                                        <span>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.</span>
                                        <div class="star-rating m-t-15">
                                            <input type="radio" id="star2-5" name="rating-2" value="5" disabled/><label for="star2-5" title="5 star"></label>
                                            <input type="radio" id="star2-4" name="rating-2" value="4" checked disabled/><label for="star2-4" title="4 star"></label>
                                            <input type="radio" id="star2-3" name="rating-2" value="3" disabled/><label for="star2-3" title="3 star"></label>
                                            <input type="radio" id="star2-2" name="rating-2" value="2" disabled/><label for="star2-2" title="2 star"></label>
                                            <input type="radio" id="star2-1" name="rating-2" value="1" disabled/><label for="star2-1" title="1 star"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="media m-b-15">
                                            <div class="avatar avatar-image">
                                                <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                            </div>
                                            <div class="media-body m-l-20">
                                                <h6 class="m-b-0">
                                                    <a href="" class="text-dark">Wilma Young</a>
                                                </h6>
                                                <span class="font-size-13 text-gray">28th Jul 2018</span>
                                            </div>
                                        </div>
                                        <span>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.</span>
                                        <div class="star-rating m-t-15">
                                            <input type="radio" id="star3-5" name="rating-3" value="5" checked disabled/><label for="star3-5" title="5 star"></label>
                                            <input type="radio" id="star3-4" name="rating-3" value="4" disabled/><label for="star3-4" title="4 star"></label>
                                            <input type="radio" id="star3-3" name="rating-3" value="3" disabled/><label for="star3-3" title="3 star"></label>
                                            <input type="radio" id="star3-2" name="rating-3" value="2" disabled/><label for="star3-2" title="2 star"></label>
                                            <input type="radio" id="star3-1" name="rating-3" value="1" disabled/><label for="star3-1" title="1 star"></label>
                                        </div>
                                    </li>
                                </ul> 
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Connected</h5>
                            <div class="m-t-30">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">
                                            <a href="" class="text-dark">Erin Gonzales</a>
                                        </h5>
                                        <span class="font-size-13 text-gray">UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">
                                            <a href="" class="text-dark">Darryl Day</a>
                                        </h5>
                                        <span class="font-size-13 text-gray">Software Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">
                                            <a href="" class="text-dark">Marshall Nichols</a>
                                        </h5>
                                        <span class="font-size-13 text-gray">Product Manager</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                    </div>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">
                                            <a href="" class="text-dark">Riley Newman</a>
                                        </h5>
                                        <span class="font-size-13 text-gray">Data Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5>Projects</h5>
                            <div class="m-t-20">
                                <div class="m-b-20 p-b-20 border-bottom">
                                    <div class="media align-items-center m-b-15">
                                        <div class="avatar avatar-image">
                                            <img src="assets/images/others/coffee-app-thumb.jpg" alt="">
                                        </div>
                                        <div class="media-body m-l-20">
                                            <h5 class="m-b-0">
                                                <a href="" class="text-dark">Coffee Finder App</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    <div class="d-inline-block">
                                        <a class="m-r-5" data-toggle="tooltip" title="Eugene Jordan" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                            </div>
                                        </a>
                                        <a class="m-r-5" data-toggle="tooltip" title="Pamela" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <span class="badge badge-pill badge-blue font-size-12 p-h-10">In Progress</span>
                                    </div>
                                </div>
                                <div class="m-b-20 p-b-20 border-bottom">
                                    <div class="media align-items-center m-b-15">
                                        <div class="avatar avatar-image">
                                            <img src="assets/images/others/weather-app-thumb.jpg" alt="">
                                        </div>
                                        <div class="media-body m-l-20">
                                            <h5 class="m-b-0">
                                                <a href="" class="text-dark">Weather App</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    <div class="d-inline-block">
                                        <a class="m-r-5" data-toggle="tooltip" title="Lillian Stone" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                            </div>
                                        </a>
                                        <a class="m-r-5" data-toggle="tooltip" title="Victor Terry" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                            </div>
                                        </a>
                                        <a class="m-r-5" data-toggle="tooltip" title="Wilma Young" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <span class="badge badge-pill badge-cyan font-size-12 p-h-10">Completed</span>
                                    </div>
                                </div>
                                <div class="m-b-20 p-b-20 border-bottom">
                                    <div class="media align-items-center m-b-15">
                                        <div class="avatar avatar-image">
                                            <img src="assets/images/others/music-app-thumb.jpg" alt="">
                                        </div>
                                        <div class="media-body m-l-20">
                                            <h5 class="m-b-0">
                                                <a href="" class="text-dark">Music App</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <p>Protein, iron, and calcium are some of the nutritional benefits associated with cheeseburgers.</p>
                                    <div class="d-inline-block">
                                        <a class="m-r-5" data-toggle="tooltip" title="Darryl Day" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                        </a>
                                        <a class="m-r-5" data-toggle="tooltip" title="Virgil Gonzales" href="">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <span class="badge badge-pill badge-cyan font-size-12 p-h-10">Completed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    




    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
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

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-backend-layout>
