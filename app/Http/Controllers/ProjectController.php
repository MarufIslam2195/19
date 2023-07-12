<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function page(){
        return view('FrontEnd.pages.project');
    }

    public function projects(){
        return DB::table('projects')->get(); 
    }
}
