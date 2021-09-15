@extends('layouts.auth')
@section('title', 'Recover')
@section('form')
<div class="mb-4 text-sm text-gray-600 text-center">
    {{ __('Forgot your password? Enter your email for a password reset link to recover your account.') }}
</div>

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<x-jet-validation-errors class="mb-4" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
    <div class="input-affix">
      
        <input id="email" class="form-control" type="email" name="email" placeholder="Email" required autofocus />
   
    </div>
    <div class="form-group" style="padding-top:10px;"> 
        <div class="d-flex align-items-center justify-content-between">
            <button class="btn btn-primary ">{{ __('Reset Password') }}</button>
        </div>
    </div>
    </div>
</form>

    
@endsection 
    

   