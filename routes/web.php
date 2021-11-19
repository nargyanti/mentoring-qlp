<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [PageController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'settings'], function () {
    Route::get('/profile', [PageController::class, 'settingProfile'])->name('setting.profile');
    Route::get('/account', [PageController::class, 'settingAccount'])->name('setting.account');
    Route::put('/profile/{id}/edit', [UserController::class, 'updateProfile'])->name('user.updateProfile');
    Route::put('/account/{id}/edit', [UserController::class, 'updateAccount'])->name('user.updateAccount');
});

Route::group(['prefix' => 'mentors'], function () {
    Route::get('/', [PageController::class, 'mentors'])->name('mentors');
    Route::get('/detail/{id}', [PageController::class, 'mentorDetail'])->name('mentorDetail');
});


