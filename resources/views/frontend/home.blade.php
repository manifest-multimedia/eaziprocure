<x-frontend-layout> 

    
        <!--====== Hero Section Start ======-->
        <section class="hero-section rel z-2 pt-210 pb-75">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-11">
                        <div class="hero-content rmb-75">
                            <span class="sub-title wow fadeInUp delay-0-2s">Complete Business Automation Software</span>
                            <h1 class="mb-15 wow fadeInUp delay-0-4s">One App for All Your Business Needs!</h1>
                            <p class="wow fadeInUp delay-0-5s">Eazibusiness is built to do the heavy lifting so you can run your business with breeze! Running a business has never been easier!</p>
                            <ul class="list-style-one mt-30 wow fadeInUp delay-0-6s">
                                <li>Enjoy 14-day free trial</li>
                                <li> Access to All Premium Features during trial</li>
                                <li> Complete Whitelable Solution for Partners</li>
                                <li> Restful API for Developers</li>
                            </ul>
                            <div class="hero-btns mt-40 wow fadeInUp delay-0-8s">
                                <a href="{{URL::Route('register')}}" class="theme-btn mb-15">Get Free 14 Day Trial  <i class="fas fa-arrow-right"></i></a>
                                <a href="{{URL::Route('home')}}" class="theme-btn style-two mb-15">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image wow fadeInLeft delay-0-4s">
                            <img src="{{asset('frontend/images/hero/hero.png')}}" alt="Hero">
                        </div>
                    </div>
                </div>
            </div>
            <img class="dots-shape" src="{{asset('frontend/images/shapes/dots.png')}}" alt="Shape">
            <img class="tringle-shape" src="{{asset('frontend/images/shapes/tringle.png')}}" alt="Shape">
            <img class="close-shape" src="{{asset('frontend//images/shapes/close.png')}}" alt="Shape">
        </section>
        <!--====== Hero Section End ======-->

<!--====== Partners Section Start ======-->
<section class="partners-section rel z-1 pt-250 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-10">
               <div class="section-title mb-45">
                   <h2>Running <span>1000s</span> Updates & Deployments Weekly</h2>
               </div>
                {{-- <div class="row">
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-2s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner1.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-4s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner2.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-6s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner3.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-8s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner4.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-2s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner5.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-4s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner6.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-6s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner7.png')}}" alt="Partner">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a class="partner-item wow fadeInRight delay-0-8s" href="project-details.html">
                            <img src="{{asset('frontend/images/partners/partner8.png')}}" alt="Partner">
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="hero-about-bg">
        <img src="{{asset('frontend/images/shapes/hero-about-bg.png')}}" alt="Background">
    </div>
</section>
<!--====== Partners Section End ======-->

    {{-- <x-frontend-services /> --}}

    {{-- <!--====== Solutions Section Start ======-->
    <section class="solutions-section rel z-1 pb-100 rpb-70">
        <div class="container">
           <div class="row justify-content-center text-center">
               <div class="col-xl-6 col-lg-8 col-md-10">
                   <div class="section-title mb-55">
                        <span class="sub-title">Features & Modules</span>
                        <h2>Complete Business Automation Tools</h2>
                    </div>
               </div>
           </div>
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-6">
                    <div class="solution-item wow fadeInUp delay-0-2s">
                        <div class="solution-content">
                            <i class="flaticon-data-analysis"></i>
                            <h3><a href="single-service.html">Realtime Analytics</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus error voluptatem accusaente dolorem laudantium totam</p>
                        </div>
                        <a href="single-service.html" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="solution-item wow fadeInUp delay-0-4s">
                        <div class="solution-content">
                            <i class="flaticon-monitoring"></i>
                            <h3><a href="single-service.html">Media Friendly</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus error voluptatem accusaente dolorem laudantium totam</p>
                        </div>
                        <a href="single-service.html" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="solution-item wow fadeInUp delay-0-6s">
                        <div class="solution-content">
                            <i class="flaticon-fast-delivery"></i>
                            <h3><a href="single-service.html">Fast and Intuitive</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus error voluptatem accusaente dolorem laudantium totam</p>
                        </div>
                        <a href="single-service.html" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="solution-item wow fadeInUp delay-0-8s">
                        <div class="solution-content">
                            <i class="flaticon-fast-delivery"></i>
                            <h3><a href="single-service.html">Well Integrated</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus error voluptatem accusaente dolorem laudantium totam</p>
                        </div>
                        <a href="single-service.html" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <img class="dots-shape" src="{{asset('frontend/images/shapes/dots.png')}}" alt="Shape">
        <img class="tringle-shape" src="{{asset('frontend/images/shapes/tringle.png')}}" alt="Shape">
        <img class="close-shape" src="{{asset('frontend/images/shapes/close.png')}}" alt="Shape">
        <img class="circle-shape" src="{{asset('frontend/images/shapes/circle.png')}}" alt="Shape">
    </section> --}}


    <!--====== Solutions Section End ======-->


        <!--====== About Section Start ======-->
        {{-- <x-frontend-about /> --}}

        <!--====== Counter Section Start ======-->
      {{-- <x-frontend-counter /> --}}
        <!--====== Counter Section End ======-->


       <!--====== Features Section Start ======-->
        {{-- <x-frontend-feedback /> --}}
        <!--====== Features Section End ======-->

       
        
        
       <x-frontend-newsletter />
        <!--====== Newsletter Section End ======-->
       
       {{-- <x-frontend-feedback /> --}}
        
        {{-- <x-frontend-blog /> --}}

</x-frontend-layout>