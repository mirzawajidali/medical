<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    //Appoinment
    public function appoinment(){
        $data = [
            'title' => 'Appoinment'
        ];
        $appoinment = Appoinment::where('id',1)->first();
        return view('admin.medical.appoinment.appoinment',compact('appoinment'));
    }
    //Appoinment update setting
    public function appoinment_update(Request $request){
        $request->validate([
            'upper_heading' => 'required',
            'lower_heading' => 'required',
            'main_heading'  => 'required',
            'paragraph'     => 'required',
            'button'        => 'required'
        ]);

        $update = Appoinment::where('id',1)->update([
            'upper_heading' => $request->upper_heading,
            'lower_heading' => $request->lower_heading,
            'main_heading'  => $request->main_heading,
            'paragraph'     => $request->paragraph,
            'btn'           => $request->button
        ]);

        if($update){
            return back()->with('success','Appoinment Setting updated successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }
}
