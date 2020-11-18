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
Route::get('/profile/sub/{user}', 'ProfileController@show_sub')->name('profile-show-sub');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile-edit');
Route::post('/profile/{user}/update', 'ProfileController@update')->name('profile-update');

// posts
Route::post('/post/share', 'PostsController@store')->name('post-share');
Route::get('/post/view/{post}', 'PostsController@view')->name('post-view');
Route::get('/post/edit/{post}', 'PostsController@edit')->name('post-edit');
Route::post('/post/update/{post}', 'PostsController@update')->name('post-update');
Route::get('/post/delete/{post}', 'PostsController@delete')->name('post-delete');
Route::get('/post/rmvimg/{post}', 'PostsController@remove_image')->name('post-rmvimg');

// like
Route::post('/post/like/{post}', 'LikeController@store')->name('post-react');
Route::get('/post/getlike/{post}', 'LikeController@get_like')->name('post-getlike');

// comment
Route::post('/comment/store/{post}', 'CommentsController@store')->name('post-storecomment');
Route::get('/comment/edit/{cmt}', 'CommentsController@edit')->name('comment-edit');
Route::post('/comment/update/{cmt}', 'CommentsController@update')->name('comment-update');
Route::get('/comment/delete/{cmt}', 'CommentsController@delete')->name('comment-delete');

// follow
Route::post('/profile/follow/{following}', 'FollowsController@store');
Route::get('/profile/getFollowers/{user}', 'FollowsController@getFollowers');
Route::get('/profile/getFollowing/{user}', 'FollowsController@getFollowing');
Route::get('/profile/show-followers/{user}', 'FollowsController@showFollowers')->name('followers-show');
Route::get('/profile/show-following/{user}', 'FollowsController@showFollowing')->name('following-show');

// search
Route::post('/search', 'PostsController@search')->name('search-results');

//green habits
Route::get('/green-habit', 'GreenController@green_habit')->name('green-habit-show');
Route::get('/green-submission', 'GreenController@green_submission')->name('green-submission');
Route::post('/green-makesubmission', 'GreenController@green_makesubmission')->name('green-makesubmission');
Route::get('/green-leaderboard', 'GreenController@green_leaderboard')->name('green-leaderboard');

// awareness
Route::get('/awareness', function() {
	return view('awareness');
})->name('awareness');

// about
Route::get('/about', function() {
	return view('about');
})->name('about');