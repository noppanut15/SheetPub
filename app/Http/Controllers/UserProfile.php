<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class UserProfile extends Controller
{
	public function __construct()
    {
        $this->middleware('RedirectIfNotAuthenticated');
    }

    public function view($userId=null){
    	if (is_null($userId))
    		$userId = Session::get('userId');
    	$record = DB::table('USER')->where('userId', '=', $userId)->get()->first();
    	$posts = DB::table('CONTENT')->join('CATEGORY', 'CONTENT.catId', '=', 'CATEGORY.catId')
    	->select('CONTENT.*', 'CATEGORY.catNameThai')
    	->where('userId', '=', $userId)
    	->latest('timestamp')->get();
    	return view('profile', [
    		'record' => $record,
    		'posts' => $posts
    	]);
    }

    public function edit(){
    	return view('edit-profile');
    }
}
