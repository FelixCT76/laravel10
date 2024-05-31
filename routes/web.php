<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


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

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', [ProfileController::class,'index']);
Route::get('/dasboardprofile', [HomeController::class,'index']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dasboardprofile ', function () {
    return view('dasboardprofile');
});