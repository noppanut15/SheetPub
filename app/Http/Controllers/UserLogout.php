<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;

class UserLogout extends Controller
{
    public function logout(Request $request){
    	$request->session()->flush();
    	return redirect('/');
    }
}
