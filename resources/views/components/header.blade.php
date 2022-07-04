<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$slot}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.png')}}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{asset('css/defaultapp.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/device-mockups.css')}}" rel="stylesheet">
    <link href="{{asset('css/device-mockups.min.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <livewire:styles />
   

    
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="/">
                        <img src="{{asset('images/logo/logo.png')}}" alt="Logo"> 
                        <img class="logo-fold" src="{{asset('images/logo/logo-fold.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="/">
                        <img src="{{asset('images/logo/logo-white.png')}}" alt="Logo"> 
                        <img class="logo-fold" src="{{asset('images/logo/logo-fold-white.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        {{-- Notifications --}}
                        <x-notifications />

                       {{-- Profile --}}
                        <x-profile />
                        
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                                <i class="anticon anticon-appstore"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- Header END -->