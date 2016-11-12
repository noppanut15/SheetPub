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
    'uses' => 'ContentController@viewByCategory'
]);

Route::get('/content/{action}/{contentId}', function ($action = 'view', $contentId = '') {

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
    'uses' => 'UserLogin@getLogin'
]);
Route::post('/login', [
    'uses' => 'UserLogin@postLogin'
]);

Route::get('/register', [
    'uses' => 'UserRegistration@getRegister'
]);
Route::post('/register', [
    'uses' => 'UserRegistration@postRegister'
]);


Route::get('/logout',[
    'uses' => 'UserLogout@logout'
]);

Route::resource('my', 'MyController');
Route::get('test','ImplicitController@getIndex');


Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));