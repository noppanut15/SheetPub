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


Route::get('/', function () {
    return view('index');
});

Route::get('category/{catId}', [
    'uses' => 'ContentController@viewByCategory'
]);

Route::get('content/view/{contentId}', [
    'uses' => 'ContentController@view'
]);

Route::get('content/edit/{contentId}', [
    'uses' => 'ContentController@getEdit'
]);

Route::post('content/edit', [
    'uses' => 'ContentController@postEdit'
]);

Route::get('content/new', [
    'uses' => 'ContentController@getNew'
]);

Route::post('content/new', [
    'uses' => 'ContentController@postNew'
]);

Route::get('vote/{contentId}/{score}', [
    'uses' => 'VoteController@vote'
]);


Route::get('profile/{action?}/{profileId?}', function ($action = 'view', $profileId = '') {
	if ($action == 'view')
		return view('profile');
	else if ($action == 'edit')
		return view('edit-profile');
    return redirect('/');
});

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
