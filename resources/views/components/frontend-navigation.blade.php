<!-- Well begun is half done. - Aristotle -->
 <!--Header-Upper-->
 <div class="header-upper">
    <div class="container clearfix">
        <div class="header-inner py-20">
            <div class="logo-outer">
                <div class="logo"><a href="{{URL::Route('home')}}"><img src="{{asset('frontend/images/logos/logo.png')}}" style="height:90px" alt="Logo"></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <div class="logo-mobile"><a href="index.html"><img src="{{asset('frontend/images/logos/logo.png')}}" alt="Logo"></a></div>
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="main-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="main-menu">
                        <ul class="navigation clearfix">
                        {{--     <li class="current"><a href="#">home</a>
                                <ul>
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index2.html">Home Two</a></li>
                                    <li><a href="index3.html">Home Three</a></li>
                                    <li><a href="index3dark.html">Home 3 Dark</a></li>
                                </ul> 
                            </li>--}}
                            {{-- <li><a href="about.html">about</a></li>
                            <li class="dropdown"><a href="#">project</a>
                                <ul>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="project-details.html">Project details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">blog</a>
                                <ul>
                                    <li><a href="blog.html">blog standard</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">pages</a>
                                <ul>
                                    <li><a href="single-service.html">service single</a></li>
                                    <li><a href="team-details.html">Team Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>--}}
                        </ul> 
                    </div>

                </nav>
                <!-- Main Menu End-->
            </div>

            <div class="menu-right d-none d-lg-flex align-items-center ml-lg-auto">
               <!-- Menu Serch Box-->
                <div class="nav-search">
                    <button class="fa fa-search"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="{{__('Search')}}" class="searchbox" required="">
                        <button type="submit" class="searchbutton fa fa-search"></button>
                    </form>
                </div>
                
                @livewire('language-switcher')
                <a href="{{URL::Route('register')}}" class="theme-btn style-two">{{__('Get Started')}} <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</div>
<!--End Header Upper-->