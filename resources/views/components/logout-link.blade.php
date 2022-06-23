    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
   
    <li>
       
        <a href="{{route('logout')}}" onclick="event.preventDefault();logout()" class="dropdown-item">
            <span class="icon-holder">
                
                {{-- <i class="anticon anticon-logout"></i> --}}
            </span>
            
            <span class="title" style="color: red">{{__('Logout')}}</span>
        </a>
    </li>
    <form id="logout" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>