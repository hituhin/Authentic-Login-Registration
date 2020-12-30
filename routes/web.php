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

Route::get('/','App\Http\Controllers\Frontend\FrontController@index');
Route::get('/tuhin','App\Http\Controllers\Frontend\FrontController@showRegistrationFrom')->name('register');
Route::post('/tuhin','App\Http\Controllers\Frontend\FrontController@processRegistration');
Route::get('/','App\Http\Controllers\Frontend\FrontController@index');
Route::get('/contact','App\Http\Controllers\Frontend\FrontController@contact')->name('contact');
Route::get('/admin','App\Http\Controllers\Backend\adminController@admin');
// dynamic routing
Route::get('/admin/{id?}/{name?}','App\Http\Controllers\Backend\adminController@user')->where(['id' => '[0-9]+', 'name' => '[a-z]+']);  

    Route::get('/create','App\Http\Controllers\Frontend\FrontController@index');
    Route::get('/dashboard','App\Http\Controllers\Frontend\FrontController@index');
    Route::get('/user/1','App\Http\Controllers\Frontend\FrontController@index');
    // Route::resource('post','App\Http\Controllers\PostController');
   
Route::resource('post','App\Http\Controllers\Backend\PostController');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Registration & Login 

Route::get('/login','App\Http\Controllers\Backend\authController@showloginForm')->name('login');
Route::post('/login','App\Http\Controllers\Backend\authController@processlogin');

Route::get('/register','App\Http\Controllers\Backend\authController@showRegisterForm')->name('register');
Route::post('/register','App\Http\Controllers\Backend\authController@processRegister');