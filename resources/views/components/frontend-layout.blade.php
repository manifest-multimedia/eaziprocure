    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!--====== Title ======-->
        <title>EaziBusiness - Complete Business Automation </title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <!--====== Font Awesome ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.5.9.0.min.css')}}">
        <!--====== Flaticon CSS ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.4.5.3.min.css')}}">
        <!--====== Magnific Popup ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
        <!--====== Slick Slider ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
        <!--====== Nice Select ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
        <!--====== Padding Margin ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/spacing.min.css')}}">
        <!--====== Menu css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/menu.css')}}">
        <!--====== Main css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    
    </head>
    
    <body>
        <div class="page-wrapper">
    
            <!-- Preloader -->
            <div class="preloader"></div>
    
    
        <!--====== Header Part Start ======-->
        <header class="main-header">
    
            <!--Header-Top-->
            <div class="header-top text-center text-white bg-blue py-5">
                <div class="container rel z-1">
                    <p>Welcome to Eazibusiness - Your Number Complete Business Automation Platform</p>
                    <img class="header-left-shape" src="{{asset('frontend/images/shapes/header-top-left.png')}}" alt="shape">
                    <img class="header-right-shape slideLeftRight infinite" src="{{asset('frontend/images/shapes/header-top-right.png')}}" alt="shape">
                </div>
            </div>
            
           <x-frontend-navigation />

        </header>
        <!--====== Header Part End ======-->



        

{{$slot}}
        
        
       
        </section>
        <!--====== Blog Section End ======-->

           
            <x-frontend-footer />
            <!--====== Footer Section End ======-->
    
        </div>
        <!--End pagewrapper-->
    
    
        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>
    
    
        <!--====== Jquery ======-->
        <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
        <!--====== Bootstrap ======-->
        <script src="{{asset('frontend/js/bootstrap.4.5.3.min.js')}}"></script>
        <!--====== Appear js ======-->
        <script src="{{asset('frontend/js/appear.js')}}"></script>
        <!--====== WOW js ======-->
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <!--====== Isotope ======-->
        <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
        <!--====== Circle Progress ======-->
        <script src="asset('frontend/js/circle-progress.min.js')"></script>
        <!--====== Image loaded ======-->
        <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <!--====== Nice Select ======-->
        <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
        <!--====== Magnific ======-->
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Slick Slider ======-->
        <script src="{{asset('frontend/js/slick.min.js')}}"></script>
        <!--====== Main JS ======-->
        <script src="{{asset('frontend/js/script.js')}}"></script>
    
    </body>
    
    </html>