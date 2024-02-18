<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/my-study', function () {
    return view('my-study');
})->name('my-study');

Route::get('/programming-experience', function () {
    return view('programming-experience');
})->name('programming-experience');

Route::get('/SWOT-analysis', function () {
    return view('SWOT-analysis');
})->name('SWOT-analysis');

Route::get('/ICT-field-of-work', function () {
    return view('ICT-field-of-work');
})->name('ICT-field-of-work');
