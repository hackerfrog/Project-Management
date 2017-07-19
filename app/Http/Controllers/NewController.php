<?php

namespace App\Http\Controllers;

use Validator;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $id = Auth::user()->id;
        $data['recentProjects'] = DB::table('projects')->where('owner', $id)->orderBy('updated_at')->limit(5)->get();
        $data['projects']       = DB::table('projects')->where('owner', $id)->orderBy('name')->get();

        return view('new')->with('data', $data);
    }

    public function new(Request $request) {

    	$rules = array(
    			'name'		=> 'required|max:128',
    			'detail'	=> 'nullable'
    		);

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails()) {
    		$messages = $validator->messages();

    		return Redirect::to('new')->withErrors($validator)->withInput();
    	} else {
    		$data = $request->all();

    		$setting = json_encode(array());
    		$team = json_encode(array());

    		$projectId = DB::table('projects')->insertGetId(
				[
					'name'		=> $data['name'],
					'detail'	=> $data['detail'],
					'owner'		=> Auth::user()->id,
					'setting'	=> $setting,
					'team'		=> $team
				]
			);

			return view('project/' . $projectId);

    	}

    	$data = $request->only('name', 'detail');

    	return back()->withInput();
    }
}
