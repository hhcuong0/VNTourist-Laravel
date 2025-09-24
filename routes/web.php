<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\ServicesController;
use App\Http\Controllers\clients\PackagesController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\ContactController;


Route::get(uri: '/', action: [HomeController::class, 'index'])->name(name: 'home');
Route::get(uri: '/about', action: [AboutController::class, 'index'])->name(name: 'about');
Route::get(uri: '/services', action: [ServicesController::class, 'index'])->name(name: 'services');
Route::get(uri: '/packages', action: [PackagesController::class, 'index'])->name(name: 'packages');
Route::get(uri: '/booking', action: [BookingController::class, 'index'])->name(name: 'booking');
Route::get(uri: '/destination', action: [DestinationController::class, 'index'])->name(name: 'destination');
Route::get(uri: '/contact', action: [ContactController::class, 'index'])->name(name: 'contact');
Route::get('/404', function () {return view('clients.errors.404');})->name('error.404');