<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //user list
    public function users_list(){
        $users = User::get();
        return view('admin.user.user-list',compact('users'));
    }

    //Add User
    public function user_add(){
        return view('admin.user.user-add');
    }
    //Add User
    public function user_added(Request $request){
        //Validation
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email'=> 'required',
            'phone'=> 'required',
            'address' => 'required',
            'password'=> 'required',
        ],[
            'name.required' => 'Enter user name',
            'name.min'      => 'Name required minimum 3 characters',
            'name.max'      => 'Name required maximum 20 characters',
            'email.required'=> 'Enter user email',
            'phone.required'=> 'Enter User Phone',
            'address.required' => 'Enter user address',
            'password.required'=> 'Enter user password'
        ]);
        //Get Data
        $user = new User();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->address = $request->address;
        $user->status  = $request->status;
        $user->is_admin = 1;
        $user->is_verify = 1;
        $user->profile = "defualt.png";
        $user->password = Hash::make($request->password);
        $user_added = $user->save();
        if($user_added){
            return back()->with('success','User added successfully!',3);
        }else{
            return back()->with('error','Something went wrong!',3);
        }
     }

     //User Delete
     public function user_delete($id){
         $user = User::find($id);
         $user_deleted = $user->delete();
         if($user_deleted){
             return back()->with('success','User deleted successfully!',3);
         }else{
             return back()->with('error','Sorry! Something went wrong!',3);
         }
     }

     //Edit user
     public function user_edit($id){
         $user_id = User::find($id);
         $data = [
             'user' => $user_id
         ];
        return view('admin.user.user-edit',$data);
     }

     //Update user
     public function user_update(Request $request){
         $request->validate([
             'name' => 'required',
             'email'=> 'required',
             'phone'    => 'required',
             'address'  => 'required',
         ]);

         $user_updated = User::where('id',$request->id)->update([
             'name' => $request->name,
             'email'=> $request->email,
             'phone'=> $request->phone,
             'address' => $request->address,
             'status'  => $request->status
         ]);
         if($user_updated){
            return redirect('admin/users')->with('success', 'User updated successfully!',3);
         }else{
            return back()->with('success','User updated successfully!',3);
         }
     }
}
