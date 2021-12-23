<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Models\Hero;
use Illuminate\Http\Request;

class Home extends Controller
{
    //Home Page
    public function home(){
        $data = [
            'title' => 'Home'
        ];
        $hero = Hero::where('id',1)->first();
        return view('medical.pages.home',$data,compact('hero'));
    }
}
