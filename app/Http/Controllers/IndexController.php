<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function index() {
	    $contents = DB::table('CONTENT')->join('CATEGORY', 'CONTENT.catId', '=', 'CATEGORY.catId')
	                ->select('CONTENT.*', 'CATEGORY.catName')
	                ->latest('timestamp')->limit(4)->get();
	    return view('index', ['contents' => $contents]);
	}
}
