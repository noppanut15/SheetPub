<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class IndexController extends Controller
{
    public function index() {
	    $contents = DB::table('CONTENT')->join('CATEGORY', 'CONTENT.catId', '=', 'CATEGORY.catId')
                    ->select('CONTENT.*', 'CATEGORY.catName', 
                        DB::raw('voteScore/votePopulation as score'))
	                ->latest('timestamp')->limit(6)->get();
	    if(Session::has('userId')) {
	    	$btn_jumbo = 'ADD NEW SHEET';
	    	$btn_jumbo_link = url('content/new');
	    }
	    else {
	    	$btn_jumbo = 'GET STARTED';
	    	$btn_jumbo_link = '#step_1';
	    }
	    return view('index', ['contents' => $contents, 'btn_msg' => $btn_jumbo, 'btn_link' => $btn_jumbo_link]);
	}
}
