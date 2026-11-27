<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/blog-details', function () {
    return view('pages.blog-details');
});

Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/portfolio-single', function () {
    return view('pages.portfolio-single');
});
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});
Route::get('/pricing', function () {
    return view('pages.pricing');
});
Route::get('/service-details', function () {
    return view('pages.service-details');
});
Route::get('/services', function () {
    return view('pages.services');
});
