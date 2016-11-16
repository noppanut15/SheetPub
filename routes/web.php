<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'middleware' => 'RedirectIfFirstVisited',
    'uses' => 'IndexController@index'
]);

Route::get('category/{catId}', [
    'uses' => 'ContentController@viewByCategory'
]);

Route::get('content/view/{contentId}', [
    'uses' => 'ContentController@view'
]);

Route::get('content/edit/{contentId}', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'ContentController@getEdit'
]);

Route::post('content/edit/{contentId}', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'ContentController@postEdit'
]);

Route::get('content/new', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'ContentController@getNew'
]);

Route::post('content/new', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'ContentController@postNew'
]);

Route::get('content/delete/{contentId}', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'ContentController@deleteContent'
]);

Route::get('vote/{contentId}/{score}', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'VoteController@vote'
]);

Route::get('profile/edit', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'UserProfile@showProfileEdit'
]);

Route::post('profile/edit', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'UserProfile@postProfileEdit'
]);

Route::get('profile/{profileId?}', [
    'uses' => 'UserProfile@view'
]);

Route::get('feed',  [
    'uses' => 'ContentController@viewByFeed'
]);

Route::get('trending',  [
    'uses' => 'ContentController@viewByTrend'
]);

Route::get('login', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserLogin@getLogin'
]);
Route::post('login', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserLogin@postLogin'
]);

Route::get('register', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserRegistration@getRegister'
]);
Route::post('register', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserRegistration@postRegister'
]);

Route::get('logout',[
    'uses' => 'UserLogout@logout'
]);
