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

Route::group(['middleware'=>'login'], function()
{
    Route::get('bentrong', 'App\Http\Controllers\Controller@bentrong')->name('bentrong');
    Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
});

Route::get('/', 'App\Http\Controllers\Controller@home')->name('home');

Route::group(['middleware'=>'logout'], function () {
    Route::get('login', 'App\Http\Controllers\LoginController@login')->name('login');
    Route::post('login', 'App\Http\Controllers\LoginController@Plogin')->name('Plogin');
    Route::get('register', 'App\Http\Controllers\RegisterController@register')->name('register');
    Route::post('register', 'App\Http\Controllers\RegisterController@Pregister')->name('Pregister');
});
