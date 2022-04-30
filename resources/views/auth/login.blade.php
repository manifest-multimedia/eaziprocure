<x-neptune-auth-layout>
<x-slot name='title'> Login </x-slot>

<p class="auth-description">Please sign-in to your account.</p>

   
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<div class="auth-credentials">
    <x-jet-validation-errors class="mb-4" />
    <form method='post' action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label class="font-weight-semibold mb-2" for="userName">Email:</label>
            <div class="input-affix">
                <i class="prefix-icon anticon anticon-user"></i>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required autofocus>
            </div>
        </div>
        <div class="form-group mt-2 mb-2">
            <label class="font-weight-semibold" for="password">Password:</label>
            @if (Route::has('password.request'))
            <a class=" pt-2 pb-2 float-right font-size-13 text-muted" href="{{ route('password.request') }}">
                {{ __('Forgot password?') }}
            </a>
        @endif
    
            <div class="input-affix m-b-10 mt-2">
                <i class="prefix-icon anticon anticon-lock"></i>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="current-password">
            </div>
        </div>
    </div> 
        <div class="form-group">
            <div class="auth-submit">
                <div class="form-group">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <span class="mt-3 font-size-13 text-muted auth-forgot-password float-end">
                    Don't have an account? 
                    <a class="small" href="/register"> Signup</a>
                </span>
                <button class="btn btn-primary mt-2">Sign In</button>
            </div>
        </div>
    </form>
</div>



    
</x-neptune-auth-layout>