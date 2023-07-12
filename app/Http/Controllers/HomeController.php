<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    public function page() {
        return view( 'FrontEnd.pages.home' );
    }

    public function heroProperties(){
        return DB::table('heroproperties')->first();
    }
    public function aboutMe(){
        return DB::table('abouts')->first();
    }
    public function socialLink(){
        return DB::table('socials')->first();
    }
}
