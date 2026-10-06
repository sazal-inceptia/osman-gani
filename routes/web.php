<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/osman-gani', function () {
    return view('osman-gani');
})->name('about.osman-gani');

Route::get('/media-events', function () {
    return view('media-events');
})->name('about.media-events');

Route::get('/life-mission', function () {
    return view('life-mission');
})->name('about.life-mission');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/speaking', function () {
    return view('speaking');
})->name('speaking');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/free-videos-library', function () {
    return view('free-videos-library');
})->name('resources.free-videos');

Route::get('/e-books', function () {
    return view('e-books');
})->name('resources.ebooks');

Route::get('/free-tools', function () {
    return view('free-tools');
})->name('resources.tools');

Route::get('/blog', function () {
    return view('blog');
})->name('resources.blog');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-usage', function () {
    return view('terms-of-usage');
})->name('terms-of-usage');
