   <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <!-- Side Nav START -->

 <div class="app-menu">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            NAVIGATION
                        </li>
                        <li>
                            <a href="{{URL::Route('dashboard')}}"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="{{url('organizations')}}"><i class="material-icons-two-tone">manage_accounts</i>Businesses</a>
                        </li>
                        <li>
                            <a href="#settings"><i class="material-icons-two-tone">settings</i>Settings<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu" style="">
                                <li>
                                    <a href="{{url('account-setup')}}">Account Setup</a>
                                </li>
                                <li>
                                    <a href="{{url('upgrade')}}">Upgrade</a>
                                </li>
                                <li>
                                    <a href="{{url('user/profile')}}">User Profile</a>
                                </li>
                                <li>
                                    <a href="{{url('business-profiles')}}">Business Profiles</a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="#settings"><i class="material-icons-two-tone">settings</i>Settings</a>
                        </li> --}}
                        
                        
                      
                        <li class="sidebar-title">
                            LOGOUT
                        </li>
                        <li>
                            <a href="#logout" onclick="event.preventDefault();logout()"><i class="material-icons-two-tone">power</i>Logout</a>
                        </li>
                        
                    </ul>
                </div> 