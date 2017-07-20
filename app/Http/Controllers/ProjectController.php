<?php

namespace App\Http\Controllers;

use Validator;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id) {


        $Userid = Auth::user()->id;
        $data['recentProjects'] = DB::table('projects')->where('owner', $Userid)->orderBy('updated_at')->limit(5)->get();
        $data['project']		= DB::table('projects')->where('id', $id)->get();

    	return view('project')->with('data', $data);
    }
}
