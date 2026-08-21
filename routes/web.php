<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/brands', 'brands')->name('brands');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/news', 'news')->name('news');
Route::view('/projectdetails', 'projectdetails')->name('projectdetails');

Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('banner', 'admin.banner')
->middleware(['auth', 'verified'])
->name('banner');

Route::view('project', 'admin.projects')
->middleware(['auth', 'verified'])
->name('project');


Route::view('basicSettings', 'admin.basicSettings')
->middleware(['auth', 'verified'])
->name('basicSettings');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


Route::view('contacts', 'admin.contact')
->middleware(['auth', 'verified'])
->name('contacts');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
