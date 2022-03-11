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
use App\Http\Controllers\InvitationController; 

Route::view('/', 'auth.login');
Route::view('/legal', 'terms')->name('legal');
Route::view('/privacy', 'privacy')->name('privacy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/account-setup', function(){ return view('settings.account-setup');})->name('account_setup'); 
Route::get('/shopping-area', function(){ return view('shopping-area'); })->name('shopping-area'); 

Route::get('/organizations', function(){ return view('marketplace');}); 
Route::get('/sms', function(){ return view('sms'); });
Route::get('/invoices', function(){ return view('invoices.list'); });
Route::get('/create-invoice', function(){ return view('invoices.new'); });
Route::get('/upgrade', function(){ return view('upgrade'); });
Route::get('/disabled', function() { return view('disabled');})->name('account_disabled'); 
Route::get('/deleted', function() { return view('disabled');})->name('account_deleted'); 
Route::get('/invitation/{user}/{org}', [InvitationController::class, 'getInvidationDetails']);

