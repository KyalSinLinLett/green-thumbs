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

Route::get('/', function () {
    return view('vis');
})->name('vis');

Auth::routes();

//this route is just a workaround as of the moment to redirect the user to their profile page after login
//awaiting a better solution - help me??
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/community', function () {
	return view('community');
})->name('community');

// profiles
Route::get('/profile/{user}', 'ProfileController@show')->name('profile-show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile-edit');
Route::post('/profile/{user}/update', 'ProfileController@update')->name('profile-update');

// posts
Route::post('/post/share', 'PostsController@store')->name('post-share');
Route::get('/post/view/{post}', 'PostsController@view')->name('post-view');
Route::get('/post/edit/{post}', 'PostsController@edit')->name('post-edit');
Route::post('/post/update/{post}', 'PostsController@update')->name('post-update');
Route::get('/post/delete/{post}', 'PostsController@delete')->name('post-delete');
Route::get('/post/rmvimg/{post}', 'PostsController@remove_image')->name('post-rmvimg');