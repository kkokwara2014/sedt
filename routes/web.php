<?php

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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontendController@index')->name('homepage');
Route::get('about','FrontendController@about')->name('aboutus');
Route::get('faq','FrontendController@faq')->name('faq');
Route::get('contact','ContactController@contact')->name('contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
