<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class UserRegistration extends Controller
{
    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){

        $this->validate($request, [
            'firstname' => 'required|max:32',
            'lastname' => 'required|max:32',
            'mail' => 'required|email|max:100|unique:USER,email',
            'username' => 'required|max:32|unique:USER,userName',
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required',
            'avatar' => 'image'
        ]);

        $image = $request->avatar;
        $destinationPath = 'images/avatars'; // upload path
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = $request->username.'.'.$extension; // renameing image
        $image->move($destinationPath, $fileName);

        DB::table('USER')->insert([
            'firstName' => $request->firstname,
            'lastName' => $request->lastname,
            'userName' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->mail,
            'profilePic' => $fileName

        ]);

        return redirect('/login');

    }
}
