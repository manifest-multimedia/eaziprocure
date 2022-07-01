<x-neptune-layout> 
    <x-slot name="title"> 
        Commerce Box &mdash; Upgrade
    </x-slot>
                <div class="page-header">
                    <h2 class="header-title">Upgrade</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="/dashboard" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                            {{-- <a class="breadcrumb-item" href="#">Pages</a> --}}
                            <span class="breadcrumb-item active">Subscription Plans</span>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="text-center m-t-30 m-b-40">
                        <h2>Subscription Plans</h2>
                        <p class="w-45 m-h-auto m-b-30">Get access to Premium Features with a Paid Subscription</p>
                        <div class="btn-group">
                            <button type="button" id="monthly-btn" class="btn btn-default active">
                                <span>Monthly</span>
                            </button>
                            <button type="button" id="annual-btn" class="btn btn-default">
                                <span>Annually</span>
                            </button>
                        </div>
                    </div>
                    {{-- Monthly Subscription Plans --}}
                    <div class="row align-items-center" id="monthly-view">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-blue avatar-icon" style="height: 55px; width: 55px;">
                                                <i class="anticon anticon-coffee font-size-25" style="line-height: 55px"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                                    $0
                                                    <span class="font-size-13 font-weight-semibold">/ month</span>
                                                </h2>
                                                <h4 class="m-b-0">Forever Free Plan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-v-30">
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">1 Organization</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">3 Members</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Invoices</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Quotes</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Verified Listings</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">24/7 Email Support</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Smart E-Contract</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-disabled">Active Plan</button>
                                    </div>

                                        

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-cyan avatar-icon" style="height: 55px; width: 55px;">
                                                <i class="anticon anticon-shop font-size-25" style="line-height: 55px"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                                    $15
                                                    <span class="font-size-13 font-weight-semibold">/ month</span>
                                                </h2>
                                                <h4 class="m-b-0">Standard Plan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-v-30">
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">5 Organizations</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Organization Members</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Invoices</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Quotes</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Verified Listings</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">24/7 Priority Support</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Smart E-Contract</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                  
                                    <x-payment-link>
                                        <x-slot name='email'> {{Auth::user()->email}} </x-slot>    
                                        <x-slot name='order_id'> standard_license </x-slot>    
                                        <x-slot name='amount'> {{15*8.07*(100)}} </x-slot>    
                                        <x-slot name='qty'> 1 </x-slot>    
                                        <x-slot name='currency'>GHS</x-slot>    
                                    </x-payment-link>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-gold avatar-icon" style="height: 55px; width: 55px;">
                                                <i class="anticon anticon-experiment font-size-25" style="line-height: 55px"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                                    $50
                                                    <span class="font-size-13 font-weight-semibold">/ month</span>
                                                </h2>
                                                <h4 class="m-b-0">Premium Plan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-v-30">
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Organizations</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Featured Listings</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">24/7 Dedicated Support</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Dedicated Account Manager</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Marketing Tools</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Custom Branding</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Public Profile</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <x-payment-link>
                                        <x-slot name='email'> {{Auth::user()->email}} </x-slot>    
                                        <x-slot name='order_id'> premium_license </x-slot>    
                                        <x-slot name='amount'> {{50*8.07*(100)}} </x-slot>    
                                        <x-slot name='qty'> 1 </x-slot>    
                                        <x-slot name='currency'> GHS </x-slot>    
                                    </x-payment-link>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Annual Subscription Plans  --}}
                    <div class="row align-items-center d-none" id="annual-view">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-blue avatar-icon" style="height: 55px; width: 55px;">
                                                <i class="anticon anticon-coffee font-size-25" style="line-height: 55px"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                                    $0
                                                    <span class="font-size-13 font-weight-semibold">/ year</span>
                                                </h2>
                                                <h4 class="m-b-0">Forever Free Plan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-v-30">
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">1 Organization</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">3 Members</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Invoices</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Quotes</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Verified Listings</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">24/7 Email Support</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Smart E-Contract</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-cyan avatar-icon" style="height: 55px; width: 55px;">
                                                <i class="anticon anticon-shop font-size-25" style="line-height: 55px"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                                    $149 
                                                    <span class="font-size-13 font-weight-semibold">/ year</span>
                                                </h2>
                                                <h4 class="m-b-0">Standard Plan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-v-30">
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">5 Organizations</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Organization Members</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Invoices</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Quotes</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Verified Listings</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">24/7 Priority Support</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Smart E-Contract</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-gold avatar-icon" style="height: 55px; width: 55px;">
                                                <i class="anticon anticon-experiment font-size-25" style="line-height: 55px"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                                    $499 
                                                    <span class="font-size-13 font-weight-semibold">/ year</span>
                                                </h2>
                                                <h4 class="m-b-0">Premium Plan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-v-30">
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Unlimited Organizations</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Featured Listings </span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">24/7 Dedicated Support</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Dedicated Account Manager</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Marketing Tools</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Custom Branding</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-b-20">
                                            <div class="d-flex justify-content-between">
                                                <span class="text-dark font-weight-semibold">Public Profile</span>
                                                <div class="text-success font-size-16">
                                                    <i class="anticon anticon-check"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            <!-- Content Wrapper END -->

</x-neptune-layout>