    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>{{$title}}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="{{asset('neptune/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('neptune/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{asset('neptune/plugins/pace/pace.css')}}" rel="stylesheet">
        <link href="{{asset('neptune/plugins/highlight/styles/github-gist.css')}}" rel="stylesheet">
        <link href="{{asset('neptune/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="{{asset('neptune/css/main.min.css')}}" rel="stylesheet">
        <link href="{{asset('neptune/css/custom.css')}}" rel="stylesheet">
        <!--====== Font Awesome ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.5.9.0.min.css')}}">
        <!--====== Flaticon CSS ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">

        <!-- Device Mockups -->
        <link href="{{asset('css/dist/devices.css')}}" rel="stylesheet">
        <link href="{{asset('css/dist/devices.min.css')}}" rel="stylesheet">


{{-- App JS --}}
{{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}


        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/images/favicon.png')}}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/images/favicon.png')}}" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

            {{-- Alpine JS --}}
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
            {{-- Alpine JS --}}
    </head>

    <body>
        <div class="app header-large align-content-stretch d-flex flex-wrap">
            <div class="app-sidebar">
                <div class="logo">
                    <a href="{{URL::Route('dashboard')}}" class="logo-icon"><span class="logo-text" style="white-space: nowrap;">Commerce Box</span></a>
                    <div class="sidebar-user-switcher user-activity-online">
                        <a href="#">
                            <img src="{{Auth::user()->profile_photo_url}}">
                            <span class="activity-indicator"></span>
                            <span class="user-info-text">{{getFirstName(Auth::user()->name)}}<br>
                                <span class="user-state-info">Online</span>
                        </span>
                        </a>
                    </div>
                </div>
               <x-app-navigation />
            </div>
            <div class="app-container">
                <div class="search">
                    <form>
                        <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                    </form>
                    <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
                </div>
                <x-neptune-app-header />
                <div class="app-content">
                    <div class="content-wrapper">
                        <div class="container-fluid">
                            {{-- <div class="row">
                                <div class="col">
                                  <x-neptune-large-header />
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col">
                                    {{$slot}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('sweetalert::alert')

        @livewire('chart-data')
        <script src="//unpkg.com/alpinejs" defer></script>
        <livewire:scripts />

        {{-- Import --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Core Vendors JS -->
<script src="{{asset('js/vendors.min.js')}}" defer></script>

<!-- page js -->
<script src="{{asset('js/pages/pricing.js')}}" defer></script>
<script src="{{asset('vendors/chartjs/Chart.min.js')}}" defer></script>


{{-- Imported --}}
        <script>
            function logout() {
                document.getElementById('logout').submit();
            }
            </script>

<script defer> 
$(document).ready(function(e) {
$('#revoke-business').on('click', function() { 
    $('#blockui-card-1').block({ 
        message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>',
        timeout: 2000 
    });                                                     
});

$('#blockui-1').on('click', function() { 
    $('#blockui-card-1').block({ 
        message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>',
        timeout: 2000 
    });                                                     
});
}

</script>
            {{-- Account Setup Next Button Script --}}

<script>
    $(document).ready(function(e) {
        $('.nextbtn').click(function(e){
            e.preventDefault();
            $('.nav-item > .active').parent().next('li').find('a').trigger('click');
                    });

            $('.previousbtn').click(function(e){
            e.preventDefault();
            $('.nav-item > .active').parent().prev('li').find('a').trigger('click');
                    });
    });

    </script>

        <!-- Javascripts -->
        <script src="{{asset('neptune/plugins/jquery/jquery-3.5.1.min.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/bootstrap/js/popper.min.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/bootstrap/js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/perfectscroll/perfect-scrollbar.min.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/pace/pace.min.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/highlight/highlight.pack.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/chartjs/chart.bundle.min.js')}}" defer></script>
        <script src="{{asset('neptune/plugins/blockUI/jquery.blockUI.min.js')}}" defer></script>

        <script src="{{asset('neptune/js/main.min.js')}}" defer></script>
        <script src="{{asset('neptune/js/custom.js')}}" defer></script>
        <script src="{{asset('neptune/js/pages/charts-chartjs.js')}}" defer></script>

        <script src="{{asset('neptune/plugins/apexcharts/apexcharts.min.js')}}" defer></script>

        {{-- Tawk.To --}}
        <!--Start of Tawk.to Script-->
<script type="text/javascript" defer>
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6273f491b0d10b6f3e70c86b/1g2af6n0v';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    </body>



    </html>
