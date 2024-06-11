<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StuffController;
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

Route::get('/', [StuffController::class, 'index'])->name('index');
Route::get('profile', [StuffController::class, 'profile'])->name('profile');
Route::get('dashboard', [StuffController::class, 'dashboard'])->name('dashboard');

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

Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('faqs', [FaqController::class, 'store'])->name('faqs.store');
Route::get('faqs/{faq}', [FaqController::class, 'show'])->name('faqs.show');
Route::get('faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('faqs/{faq}', [FaqController::class, 'update'])->name('faqs.update');
Route::get('faq/{faq}/delete', [FaqController::class, 'delete'])->name('faq.delete');
Route::delete('faq/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');

//Route::resource('posts', PostController::class);
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('post/{post}/delete', [PostController::class, 'delete'])->name('post.delete');
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/error', function () {
    abort(500);
});
