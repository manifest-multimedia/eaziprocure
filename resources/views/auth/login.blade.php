@extends('layouts.auth')
@section('title', 'Sign In')

@section('form')
    
<x-jet-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method='post' action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label class="font-weight-semibold" for="userName">Email:</label>
        <div class="input-affix">
            <i class="prefix-icon anticon anticon-user"></i>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required autofocus>
        </div>
    </div>
    <div class="form-group">
        <label class="font-weight-semibold" for="password">Password:</label>
        @if (Route::has('password.request'))
        <a class="float-right font-size-13 text-muted" href="{{ route('password.request') }}">
            {{ __('Forgot password?') }}
        </a>
    @endif

        
        <div class="input-affix m-b-10">
            <i class="prefix-icon anticon anticon-lock"></i>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="current-password">
        </div>
    </div>
    <div class="form-group">
        <div class="d-flex align-items-center justify-content-between">
            <span class="font-size-13 text-muted">
                Don't have an account? 
                <a class="small" href="/register"> Signup</a>
            </span>
            <button class="btn btn-primary">Sign In</button>
        </div>
    </div>
</form>

<div class="block mt-4">
    <label for="remember_me" class="flex items-center">
        <x-jet-checkbox id="remember_me" name="remember" />
        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div>


    
@endsection 
    

          