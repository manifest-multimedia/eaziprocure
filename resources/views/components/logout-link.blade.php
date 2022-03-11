    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <li class="nav-item">
        <a href="{{route('logout')}}" onclick="event.preventDefault();logout()">
            <span class="icon-holder">
                <i class="anticon anticon-logout"></i>
            </span>
            <span class="title">Logout</span>
        </a>
    </li>
    <form id="logout" action="{{ route('logout') }}" method="POST" style="padding-bottom:40px">
        @csrf
    </form>