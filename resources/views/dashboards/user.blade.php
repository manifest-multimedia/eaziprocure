<x-backend-layout>  
<x-slot name="title"> 
    EaziProcure &mdash; Dashboard
</x-slot>

<div class="page-header no-gutters">
    <div class="d-md-flex align-items-md-center justify-content-between">
        <div class="media m-v-10 align-items-center">
            <div class="avatar avatar-image avatar-lg">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="profile-photo">
            </div>
            <div class="media-body m-l-15">
                <h4 class="m-b-0">Welcome, {{getFirstName(Auth::user()->name)}}!</h4>
                {{-- <span class="text-gray">{{ucfirst(Auth::user()->user_role)}}</span> --}}
            </div>
        </div>
        <div class="d-md-flex align-items-center d-none">
            {{-- <div class="media align-items-center m-r-40 m-v-5">
                <div class="font-size-27">
                    <i class="text-primary anticon anticon-profile"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">78</h2>
                    <span class="text-gray">Tasks</span>
                </div>
            </div> --}}
            {{-- <div class="media align-items-center m-r-40 m-v-5">
                <div class="font-size-27">
                    <i class="text-success  anticon anticon-appstore"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">21</h2>
                    <span class="text-gray">Projects</span>
                </div>
            </div> --}}
            {{-- <div class="media align-items-center m-v-5">
                <div class="font-size-27">
                    <i class="text-danger anticon anticon-team"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">39</h2>
                    <span class="text-gray">Members</span>
                </div>
            </div> --}}
        </div>
    </div>
</div>
    @if(Auth::user()->account_status==0)
        <div class="alert alert-warning"> Hello {{getFirstName(Auth::user()->name)}}, your account setup is incomplete. <a href="/account-setup">Click Here</a> to setup your business profile!</div>
        {{-- <div class="alert alert-warning"> Hello {{getFirstName(Auth::user()->name)}}, you're currently on our forever free plan. <a href="/upgrade">Upgrade</a> to access premium features and services!</div> --}}
    @endif 
        <!-- Content Wrapper START -->
            <div class="row">
                @component('components.net-revenue-widget') @endcomponent

                @component('components.bounce-rate-widget') @endcomponent
                
                @component('components.orders-widget') @endcomponent
                
                @component('components.total-expense-widget') @endcomponent
                
            </div>
            @component('components.overal-rating-widget') @endcomponent
            @component('components.total-overview-widget') @endcomponent
                {{-- <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Monthly Target</h5>
                            </div>  
                            <div class="d-flex align-items-center position-relative m-v-50" style="height:150px;">
                                <div class="w-100 position-absolute" style="height:150px; top:0;">
                                    <canvas class="chart m-h-auto" id="porgress-chart"></canvas>
                                </div>
                                <h2 class="w-100 text-center text-large m-b-0 text-success font-weight-normal">$3,531</h2>
                             </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <span class="badge badge-success badge-dot m-r-10"></span>
                                <span><span class="font-weight-semibold">70%</span> of Your Goal</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
@component('components.latest-transactions')@endcomponent 
       
</x-backend-layout>