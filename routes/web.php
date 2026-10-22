<?php

use Illuminate\Support\Facades\Route;

// Home / Main Page
Route::get('/', function () {
    return view('home');
})->name('home');

// What Is GBV Page
Route::get('/what-is', function () {
    return view('what-is');
})->name('what.is');

// Law Enforcement Page (mapped to both hyphens and dots to fix exceptions)
Route::get('/law-enforcement', function () {
    return view('law-enforcement');
})->name('law-enforcement');

Route::get('/law-enforcement-alt', function () {
    return view('law-enforcement');
})->name('law.enforcement');

// Enforcer Page
Route::get('/enforcer', function () {
    return view('enforcer');
})->name('enforcer');

// Hotline Page
Route::get('/hotline', function () {
    return view('hotline');
})->name('hotline');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');