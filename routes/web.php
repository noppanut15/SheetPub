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

Route::get('/category/{catId}', [
    'middleware' => 'RedirectIfNotAuthenticated',
    'uses' => 'ContentController@viewByCategory'
]);

Route::get('/content/{action}/{contentId?}', function ($action = 'view', $contentId = '') {

    if ($action == 'view')
    	return view('content');
    else if ($action == 'edit')
    	return view('edit-content');
    else if ($action == 'new')
    	return view('new-content');
    return redirect('/');
});

Route::get('/profile/{action?}/{profileId?}', function ($action = 'view', $profileId = '') {
	if ($action == 'view')
		return view('profile');
	else if ($action == 'edit')
		return view('edit-profile');
    return redirect('/');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/trending', function () {
    return view('trending');
});

Route::get('/login', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserLogin@getLogin'
]);
Route::post('/login', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserLogin@postLogin'
]);

Route::get('/register', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserRegistration@getRegister'
]);
Route::post('/register', [
    'middleware' => 'RedirectIfAuthenticated',
    'uses' => 'UserRegistration@postRegister'
]);

Route::get('/logout',[
    'uses' => 'UserLogout@logout'
]);
