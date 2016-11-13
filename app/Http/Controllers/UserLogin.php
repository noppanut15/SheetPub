<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class UserLogin extends Controller
{
	public function getLogin(){
		return view('login');
	}

	public function postLogin(Request $request){
		$find = DB::table('USER')
		->where(function($query) use ($request){
			$query->where('userName', '=', $request->username_mail)->orWhere('email', '=', $request->username_mail);
		})
		->get()->first();

		if (count($find) && Hash::check($request->password, $find->password)){
			$request->session()->put('userId', $find->userId);
			$request->session()->put('firstname', $find->firstName);
			$request->session()->put('lastname', $find->lastName);
			$request->session()->put('username', $find->userName);
			$request->session()->put('mail', $find->email);
			$request->session()->put('profilePic', $find->profilePic);
			return redirect('feed');
		}
		else {
			return view('login', ['message' => 'Your username or password is incorrect.']);
		}
	}
}
