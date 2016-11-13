<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class ContentController extends Controller
{
	public function __construct()
    {
        $this->middleware('RedirectIfNotAuthenticated');
    }

	public function viewByCategory($catId) {
		return view('category');
	}

    public function viewByFeed(){
        
        return view('feed');
    }

    public function viewByTrend(){
        return view('trending');
    }

	public function view($contentId) {
		$content = DB::table('CONTENT')->join('CATEGORY', 'CONTENT.catId', '=', 'CATEGORY.catId')
					->select('CONTENT.*', 'CATEGORY.catName')
					->where('contentId', '=', $contentId)->get()->first();
		if (count($content)){
            $vote = DB::table('VOTE')->where('userId', '=', Session::get('userId'))
        ->where('contentId', '=', $contentId)->count();
            $viewOnly = 'false';
            if ($vote == 1)
                $viewOnly = 'true';

			return view('content', [
				'content' => $content, 
				'time' => date('d F Y', strtotime(str_replace('-','/', $content->timestamp).' +0000')),
                'viewOnly' => $viewOnly
				]);
        }
		else
			return redirect('/');
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
        $username = $request->session()->get('username');

        $destinationPath = 'uploads/files'; // upload path
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = md5(date('U').$username).'.'.$extension; // renameing image
        $file->move($destinationPath, $fileName);

        $destinationPath = 'uploads/thumbnails'; // upload path
        $extension = $thumbnail->getClientOriginalExtension(); // getting image extension
        $thumbnailName = md5(date('U').$username).'.'.$extension; // renameing image
        $thumbnail->move($destinationPath, $thumbnailName);

        $contentId = DB::table('CONTENT')->insertGetId([
            'catId' => $request->category,
            'userId' => $request->session()->get('userId'),
            'topic' => $request->title,
            'description' => $request->description,
            'file' => $fileName,
            'thumbnail' => $thumbnailName
        ]);
        return redirect('content/view/'.$contentId);
	}

	public function getEdit($contentId) {

	}

	public function postEdit(Request $request) {

	}

}
