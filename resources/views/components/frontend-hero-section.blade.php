    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<!--====== Hero Section Start ======-->
<section class="hero-section rel z-2 pt-210 pb-75">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-11">
                <div class="hero-content rmb-75">
                    <span class="sub-title wow fadeInUp delay-0-2s">{{__('Complete Business Automation Software')}}</span>
                    <h1 class="mb-15 wow fadeInUp delay-0-4s">{{__('One App for All Your Business Needs!')}}</h1>
                    <p class="wow fadeInUp delay-0-5s">{{__('Eazibusiness is built to do the heavy lifting so you can run your business with breeze! Running a business has never been easier!')}}</p>
                    <ul class="list-style-one mt-30 wow fadeInUp delay-0-6s">
                        <li>{{__('Enjoy 14-day free trial')}}</li>
                        <li> {{__('Access to All Premium Features during trial')}}</li>
                        <li> {{__('Complete Whitelable Solution for Partners')}}</li>
                        <li> {{__('Restful API for Developers')}}</li>
                    </ul>
                    <div class="hero-btns mt-40 wow fadeInUp delay-0-8s">
                        <a href="{{URL::Route('register')}}" class="theme-btn mb-15">{{__('Get Free 14 Day Trial')}}<i class="fas fa-arrow-right"></i></a>
                        <a href="{{URL::Route('home')}}" class="theme-btn style-two mb-15">{{__('Learn More')}} <i class="fas fa-arrow-right"></i></a>
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