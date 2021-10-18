<x-header /> 
<x-search> 
Search Results
</x-search>

<x-quickview /> 
<x-sidebar />


<!-- Page Container START -->
<div class="page-container">
    
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header no-gutters has-tab">
        <h2 class="font-weight-normal">Account Setup</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-account">Organization</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-network">Socials</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-notification">Notification</a>
            </li> --}}
        </ul>
    </div>
    <div class="row">

        {{-- <div class="clean p-250"> Hello {{Auth::user()->name}} Welcome to your Dashboard. I'm still a work in progress. Wink :) </div> --}}
        
        @livewire('account-setup')
        
    </div>

</div>

<x-footer /> 