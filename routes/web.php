<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

// Show contact page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Submit contact form
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');