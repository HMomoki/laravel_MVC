<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'guest'], function () {
    Route::get('/','HomeController@index')->name('home');
    Route::name('auth.')->group(function () {
        Route::get('/signup','Auth\RegisterController@signup')->name('signup');
        Route::post('/signup','Auth\RegisterController@register')->name('register');
    });
});

// Route::middleware(['verified'])->group(function () {

// }