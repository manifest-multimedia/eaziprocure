<div>
    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->
    <li class="dropdown dropdown-animated scale-left">
        <div class="pointer" data-toggle="dropdown">
            <div class="avatar avatar-image  m-h-10 m-r-15">
                <img src="{{ Auth::user()->profile_photo_url }}"  alt="">
            </div>
        </div>
        <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                <div class="d-flex m-r-50">
                    <div class="avatar avatar-lg avatar-image">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="">
                    </div>
                    <div class="m-l-10">
                        <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->name }}</p>
                        <p class="m-b-0 opacity-07">{{ucfirst(Auth::user()->user_role);}}</p>
                    </div>
                </div>
            </div>
@can('isAdmin')
    

            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                        <span class="m-l-10">Profile</span>
                    </div>
                    <i class="anticon font-size-10 anticon-right"></i>
                </div>
            </a>
            
            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                        <span class="m-l-10">Organization Settings</span>
                    </div>
                    <i class="anticon font-size-10 anticon-right"></i>
                </div>
            </a>
            
            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                        <span class="m-l-10">Marketplace</span>
                    </div>
                    <i class="anticon font-size-10 anticon-right"></i>
                </div>
            </a>

    @endcan

<!-- Authentication -->



        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="dropdown-item d-block p-h-15 p-v-10" onclick="event.preventDefault();
            this.closest('form').submit();">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        
                        
                        <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                        <span class="m-l-10">Logout</span>
                        
                    </div>
                    <i class="anticon font-size-10 anticon-right"></i>
                </div>
            </a>
        </form>
        </div>
    </li>
</div>