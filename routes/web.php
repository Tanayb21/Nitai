<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;
use App\Http\Controllers\SubscriberController;

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');


use App\Http\Controllers\ContactFormController;

Route::get('/contact', function () {
    return view('contact'); // Make sure to replace this with your contact form view
});

Route::post('/contact', [ContactFormController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'welcome');
Route::view('/learnmore', 'learnmore');
Route::view('/contact', 'contactus');
Route::view('/abt', 'aboutus');
Route::view('/services', 'services');