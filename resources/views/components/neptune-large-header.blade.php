    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

    <div class="media-body m-l-15">
        <h4 class="m-b-0">Welcome back {{getFirstName(Auth::user()->name)}}!</h4>
        {{-- <span class="text-gray">{{ucfirst(Auth::user()->user_role)}}</span> --}}
    </div>
        @if(Auth::user()->account_status==0)
            <div class="alert alert-warning"> Hello {{getFirstName(Auth::user()->name)}}, your account setup is incomplete. <a href="/account-setup">Click Here</a> to setup your business profile!</div>
            {{-- <div class="alert alert-warning"> Hello {{getFirstName(Auth::user()->name)}}, you're currently on our forever free plan. <a href="/upgrade">Upgrade</a> to access premium features and services!</div> --}}
        @endif 