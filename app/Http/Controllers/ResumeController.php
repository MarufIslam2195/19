<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(){
        return view('FrontEnd.pages.resume');
    }
    public function resume(){
        return DB::table('resumes')->first(); 
    }
    public function allExperences(){
        return DB::table('experences')->get(); 
    }
    public function allEducations(){
        return DB::table('educations')->get(); 
    }
    public function skills(){
        return DB::table('skills')->get(); 
    }
    public function languages(){
        return DB::table('languages')->get(); 
    }
}
