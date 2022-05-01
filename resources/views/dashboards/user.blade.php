<x-neptune-layout>  
<x-slot name="title"> 
    Eazibusiness &mdash; Dashboard
</x-slot>

<div class="page-header no-gutters">
    <div class="d-md-flex align-items-md-center justify-content-between">
        <div class="media m-v-10 align-items-center">
            <div class="avatar avatar-image avatar-lg">
                {{-- <img src="{{ Auth::user()->profile_photo_url }}" alt="profile-photo"> --}}
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
            <x-net-revenue-widget />
            <x-bounce-rate-widget /> 
            <x-orders-widget /> 
            <x-total-expense-widget /> 
        </div>

        <x-overal-rating-widget /> 
        <x-total-overview-widget />    
    </div>
    
    <x-latest-transactions />       
    
</x-neptune-layout>