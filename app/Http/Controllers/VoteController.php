<?php

namespace sheetpub\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class VoteController extends Controller
{
    public function vote($contentId, $score){
    	$row = DB::table('VOTE')->where('userId', '=', Session::get('userId'))
    	->where('contentId', '=', $contentId)->count();

    	if ($row == 0){
    		DB::table('VOTE')->insert(
    			['userId' => Session::get('userId'), 'contentId' => $contentId]
    		);
    		$voted = DB::table('CONTENT')->select('voteScore', 'votePopulation')
    									 ->where('contentId', '=', $contentId)->get()->first();
    		$score += $voted->voteScore;
    		$population = $voted->votePopulation + 1;
    		DB::table('CONTENT')->where('contentId', $contentId)
    							->update(['voteScore' => $score, 'votePopulation' => $population]);
    		return 'success';
    	}

    	return 'already voted';
    }
}
