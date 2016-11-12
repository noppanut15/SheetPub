<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
	public function __construct()
    {
        $this->middleware('RedirectIfNotAuthenticated');
    }

	public function viewByCategory($catId) {
		return view('category');
	}

	public function view($contentId) {

	}

	public function getNew() {
		return view('new-content');
	}

	public function postNew(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:100',
            'category' => 'required|max:10',
            'description' => 'required',
            'file' => 'required|mimetypes:application/pdf',
            'thumbnail' => 'required|image',
        ]);
        $file = $request->file;
        $thumbnail = $request->thumbnail;

        $destinationPath = 'uploads/files'; // upload path
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = $request->username.'.'.$extension; // renameing image
        $image->move($destinationPath, $fileName);
	}

	public function getEdit($contentId) {

	}

	public function postEdit(Request $request) {

	}

}
