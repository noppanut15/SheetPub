<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
	public function viewByCategory($catId) {
		return view('category');
	}
}
