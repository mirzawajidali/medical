<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Header;
use App\Models\State;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    //Top Nav
    public function top_nav(){
        $cities     = City::get();
        $states     = State::get();
        $countries  = Country::get();
        $header     = Header::where('id',1)->first();
        $address    = explode(",",$header['address']);
        return view('admin.medical.header.top-nav',compact('cities','states','countries','header','address'));
    }

    //To Nav updated
    public function top_nav_updated(Request $request){
        $request->validate([
            'email'     => 'required',
            'city'      => 'required',
            'country'   => 'required',
            'state'     => 'required',
            'phone'     => 'required'
        ],
        [
            'email.required'    => 'Please Enter Email',
            'city.required'     => 'Please Enter City',
            'country.required'  => 'Please Enter Country',
            'state.required'    => 'Please Enter State',
            'phone.required'    => 'Please Enter Contact No'
        ]);

        $address = $request->city.",".$request->state.",".$request->country;

        //image file
        $logo_image = $request->file('logo');

        //check if image exist
        if(!empty($logo_image)){
            //set image settings
            $header = Header::where('id',1)->first();
            $already_have_logo = $header['logo'];
            unlink($already_have_logo);
            $image_extension   = strtolower($logo_image->getClientOriginalExtension());
            $image_random_name = sha1(time());
            $image_full_name   = $image_random_name.".".$image_extension;
            $image_path        = "public/admin/logo/";
            $image_move        = $logo_image->move($image_path, $image_full_name);
            $image_last_name   = $image_path.$image_full_name;
            //Update
            $top_nav_updated = Header::where('id',1)->update([
                'logo'      => $image_last_name,
                'email'     => $request->email,
                'address'   => $address,
                'phone'     => $request->phone
            ]);
            if($top_nav_updated){
                return back()->with('success','Top Navigation Updated Successfully!',3);
            }else{
                return back()->with('error','Something went wrong',3);
            }
        }else{
            //update data without image
            $top_nav_updated = Header::where('id',1)->update([
                'email'     => $request->email,
                'address'   => $address,
                'phone'     => $request->phone
            ]);
            if($top_nav_updated){
                return back()->with('success','Top Navigation Updated Successfully!',3);
            }else{
                return back()->with('error','Something went wrong',3);
            }
        }

    }
}
