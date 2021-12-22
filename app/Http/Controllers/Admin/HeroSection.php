<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroSection extends Controller
{
    //Hero Section
    public function hero(){
        $hero = Hero::where('id',1)->first();
        return view('admin.medical.home.hero-section',compact('hero'));
    }
    public function hero_updated(Request $request){
        $request->validate([
            'sub_heading' => 'required',
            'title'       => 'required',
            'button'         => 'required',
            'paragraph'   => 'required',
        ]);

        $banner = $request->file('banner');

        //if banner exist
        if(!empty($banner)){
            //Delete image already exist
            $hero_get      = Hero::where('id',1)->first();
            $hero_image    = $hero_get['banner'];
            unlink($hero_image);
            //New Image
            $image_ran_name  = sha1(time());
            $image_extension = strtolower($banner->getClientOriginalExtension());
            $image_full_name = $image_ran_name.".".$image_extension;
            $image_path      = "public/banner/";
            $image_move      = $banner->move($image_path,$image_full_name);
            $image_last_name = $image_path.$image_full_name;
            //update
            $hero_update = Hero::where('id',1)->update([
                'title'         => $request->title,
                'sub_heading'   => $request->sub_heading,
                'paragraph'     => $request->paragraph,
                'btn'           => $request->button,
                'banner'        => $image_last_name
            ]);
            if($hero_update){
                return back()->with('success','Hero Section Updated Successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong!',3);
            }
        }else{
            //update without image
            $hero_update = Hero::where('id',1)->update([
                'title'         => $request->title,
                'sub_heading'   => $request->sub_heading,
                'paragraph'     => $request->paragraph,
                'btn'           => $request->button
            ]);
            if($hero_update){
                return back()->with('success','Hero Section Updated Successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong!',3);
            }
        }
    }
}
