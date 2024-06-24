<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [LeadController::class, 'showForm'])->name('sp.youcandoit.index');
Route::post('/store-lead', [LeadController::class, 'storeLead'])->name('storeLead');
Route::get('/home', function () {
    return view('wave.home');
})->name('wave.home');

// Route for Earnings Disclaimer
Route::get('/earnings-disclaimer', function () {
    return view('policys.disclaimer');
})->name('earnings.disclaimer');

// Route for Privacy Policy
Route::get('/privacy-policy', function () {
    return view('policys.privacy');
})->name('privacy.policy');

// Route for Terms and Conditions
Route::get('/terms-and-conditions', function () {
    return view('policys.terms');
})->name('terms.conditions');

// Authentication Routes
// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Wave routes
Wave::routes();