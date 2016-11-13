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

    public function showProfileEdit(){
    	return view('edit-profile', [
    		'profilePic' => Session::get('profilePic'),
    		'firstname' => Session::get('firstname'),
    		'lastname' => Session::get('lastname'),
    		'mail' => Session::get('mail'),
    		'username' => Session::get('username'),
    		'userId' => Session::get('userId')
    		]);
    }

    public function postProfileEdit(Request $request){
    	$unique = '';
    	if (Session::get('mail') != $request->mail){
    		$unique = '|unique:USER,email';
    	}
        $this->validate($request, [
            'firstname' => 'required|max:32',
            'lastname' => 'required|max:32',
            'mail' => 'required|email|max:100'.$unique,
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required',
            'avatar' => 'image'
        ]);

        $image = $request->avatar;
        $username = Session::get('username');
        $fileName = Session::get('profilePic');

        if (!empty($image)){
        	$destinationPath = 'images/avatars'; // upload path
        	if (file_exists($destinationPath.'/'.$fileName))
        		unlink($destinationPath.'/'.$fileName); // delete old profile pic
	        $extension = $image->getClientOriginalExtension(); // getting image extension
	        $fileName = $username.'.'.$extension; // renameing image
	        $image->move($destinationPath, $fileName);
        }

        DB::table('USER')->where('userId', '=', Session::get('userId'))->update([
            'firstName' => $request->firstname,
            'lastName' => $request->lastname,
            'password' => $request->password,
            'email' => $request->mail,
            'profilePic' => $fileName
        ]);

			$request->session()->put('firstname', $request->firstname);
			$request->session()->put('lastname', $request->lastname);
			$request->session()->put('mail', $request->mail);
			$request->session()->put('profilePic', $fileName);

        return redirect('/profile');
    }
}
