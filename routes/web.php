<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified', 'checkrole'])->get('/dashboard', function () {
    if(Gate::allows('IsSuperAdmin'))
    {

        return view('dashboard');
    }
    


})->name('dashboard');



Route::view('/legal', 'legal')->name('legal');
Route::view('/legal', 'privacy')->name('privacy');


