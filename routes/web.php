<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Events\Notifications; 
use Illuminate\Http\Request; 
use Illuminate\Http\Response; 
use App\Notifications\NewAccountSMSNotification; 
use Illuminate\Support\Facades\Notification;


Route::view('/', 'auth.login');
Route::view('/legal', 'terms')->name('legal');
Route::view('/privacy', 'privacy')->name('privacy');

Route::middleware(['auth:sanctum', 'verified', 'checkrole'])->get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/account-setup', function(){ return view('settings.account-setup');})->name('account_setup'); 


Route::get('/sms', function()

{    
    $user=Auth::user(); $content="Text"; 
    $user->notify(new NewAccountSMSNotification($content));

});