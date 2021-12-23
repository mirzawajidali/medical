<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use Illuminate\Http\Request;

class AppoinmentPage extends Controller
{
    //Appoinment
    public function appoinment(){
        $data = ['title' => 'Appoinment'];
        $appoinment = Appoinment::where('id',1)->first();
        return view('medical.pages.appoinment',compact('appoinment'),$data);
    }
}
