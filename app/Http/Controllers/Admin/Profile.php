<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Profile extends Controller
{
    //Profile
    public function profile(){
        $user = User::get()->first();
        $data = [
            'users' => $user
        ];
        return view('admin.profile.profile',$data);
    }

    //Update Profile
    public function profile_update(Request $request){
        $data = [];
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        //profile image
        $image = $request->file('profile');
        //Check if image exist
        if(!empty($image)){
            //Image Settings
            $image_random_name = sha1(time());
            $image_extension   = strtolower($image->getClientOriginalExtension());
            $image_name        = $image_random_name.".".$image_extension;
            $path              = "public/admin/profile/";
            $image_upload      = $image->move($path, $image_name);
            $image_full_name   = $path.$image_name;
            $update_profile = User::where('id',$request->id)->update([
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'profile' => $image_full_name,
                'address' => $request->address
            ]);
            if($update_profile){
                return back()->with('success','Profile Updated Successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong.',3);
            }
        }else{
            $update_profile = User::where('id',$request->id)->update([
                'id'    => $request->id,
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            if($update_profile){
                return back()->with('success','Profile Updated Successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong.',3);
            }
        }
    }
}
