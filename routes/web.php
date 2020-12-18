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
    Route::get('shop', 'App\Http\Controllers\Controller@shop')->name('shop');
    Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
});

Route::get('/', 'App\Http\Controllers\Controller@home')->name('home');

Route::group(['middleware' => 'admin'], function()
{
    Route::group(['prefix' => 'account'], function(){
        Route::get('/', 'App\Http\Controllers\AdminController@account')->name('account');
        Route::get('add_account', 'App\Http\Controllers\AdminController@add_account')->name('add_account');
        Route::post('add_account', 'App\Http\Controllers\AdminController@Padd_account')->name('add_account');
        Route::get('edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('edit');
        Route::post('edit/{id}', 'App\Http\Controllers\AdminController@Pedit');
        Route::get('delete/{id}', 'App\Http\Controllers\AdminController@delete');
    });

    Route::group(['prefix' => 'storage'], function(){
        Route::get('/', 'App\Http\Controllers\storageController@storage')->name('storage');
        Route::get('add','App\Http\Controllers\storageController@add' )->name('add_product');
        Route::post('add', 'App\Http\Controllers\storageController@Padd')->name('add_product');
        Route::get('edit/{id}', 'App\Http\Controllers\storageController@edit')->name('edit_product');
        Route::post('edit/{id}', 'App\Http\Controllers\storageController@Pedit');
        Route::get('delete/{id}','App\Http\Controllers\storageController@delete');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'App\Http\Controllers\categoryController@category')->name('category');
        Route::get('add','App\Http\Controllers\categoryController@add' )->name('add_category');
        Route::post('add', 'App\Http\Controllers\categoryController@Padd')->name('add_category');
        Route::get('edit/{id}', 'App\Http\Controllers\categoryController@edit')->name('edit_category');
        Route::post('edit/{id}', 'App\Http\Controllers\categoryController@Pedit');
        Route::get('delete/{id}','App\Http\Controllers\categoryController@delete');
    });

    Route::group(['prefix' => 'supplier'], function () {
        Route::get('/', 'App\Http\Controllers\supplierController@supplier')->name('supplier');
        Route::get('add','App\Http\Controllers\supplierController@add' )->name('add_supplier');
        Route::post('add', 'App\Http\Controllers\supplierController@Padd')->name('add_supplier');
        Route::get('edit/{id}', 'App\Http\Controllers\supplierController@edit')->name('edit_supplier');
        Route::post('edit/{id}', 'App\Http\Controllers\supplierController@Pedit');
        Route::get('delete/{id}','App\Http\Controllers\supplierController@delete');
    });

    Route::group(['prefix' => 'profile'], function(){
        Route::get('/', 'App\Http\Controllers\AdminController@profile')->name('profile');
        Route::post('update_infor', 'App\Http\Controllers\AdminController@update_infor')->name('update_infor');
    });

    Route::get('dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard');
});

Route::get('test', 'App\Http\Controllers\AdminController@test')->name('test');

Route::group(['middleware'=>'logout'], function () {
    Route::get('login', 'App\Http\Controllers\LoginController@login')->name('login');
    Route::post('login', 'App\Http\Controllers\LoginController@Plogin')->name('Plogin');
    Route::get('register', 'App\Http\Controllers\RegisterController@register')->name('register');
    Route::post('register', 'App\Http\Controllers\RegisterController@Pregister')->name('Pregister');
});
