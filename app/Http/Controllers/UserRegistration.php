<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
            'password_confirmation' => 'required'
        ]);


        DB::table('USER')->insert([
            'firstName' => $request->firstname,
            'lastName' => $request->lastname,
            'userName' => $request->username,
            'password' => $request->password,
            'email' => $request->mail,

        ]);

        return redirect('/login');

    }
}
