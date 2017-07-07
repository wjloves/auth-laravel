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

// Route::get('/', function () {
//   // return  response()->json([1,2,3]);
//    return view('welcome');

// });

Route::get('/main','HomeController@main');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('mail/send','MailController@send');