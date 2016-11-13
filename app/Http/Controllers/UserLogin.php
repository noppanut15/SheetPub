<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
		->where('password', '=', $request->password)
		->get();

		if (count($find)){
			$request->session()->put('userId', $find->first()->userId);
			$request->session()->put('firstname', $find->first()->firstName);
			$request->session()->put('lastname', $find->first()->lastName);
			$request->session()->put('username', $find->first()->userName);
			$request->session()->put('mail', $find->first()->email);
			$request->session()->put('profilePic', $find->first()->profilePic);
			return redirect('feed');
		}
		else {
			return view('login', ['message' => 'Your username or password is incorrect.']);
		}
	}
}
