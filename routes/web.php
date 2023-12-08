<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [HomeController::class, 'view'])->name('home');
Route::get('/post/{post}', [PostController::class, 'viewPost'])->name('view.post');
Route::get('/profile/{username}', [ProfileController::class, 'profile'])->name('profile');

Route::get('/logout', function () {
    auth()->logout();

    return redirect('/');
});