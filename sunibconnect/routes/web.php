<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\usertescontroller;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::get('/discover', [usertescontroller::class, 'getAll']);

Route::get('/friend', function () {
    return view('friend');
});
Route::get('/profile', function () {
    return view('profile');
});
