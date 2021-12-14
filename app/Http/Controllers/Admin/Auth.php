<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    //Login
    public function login(){
        $data = [
            'title' => 'Login'
        ];
        return view('admin.auth.login',$data);
    }
    //Logged In
    public function logged_in(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);
        //Check email exist
        $email = User::where('email', $request->email)->first();
        if($email){
            //Check for password
            if(Hash::check($request->password, $email['password'])){
               //Check for Is Admin
               if($email['is_admin'] ==0){
                   return back()->with('error','Sorry! You blocked by Admin',3);
                   exit();
               }
               //Check Is Admin Verify
               if($email['is_verify'] ==0){
                return back()->with('error','Your Account is not verified!',3);
                exit();
               }
               //Redirect to Dashboard
               $request->session()->put('loggedUser', $email['id']);
               return redirect('admin/dashboard');
            }else{
                return back()->with('error','Invalid Email or Password',3);
            }
        }else{
            return back()->with('error','Invalid Email or Password',3);
        }
    }

    //Logout
    public function logout(){
        if(Session::has('loggedUser')){
            Session::pull('loggedUser');
            return redirect('admin')->with('success','You are logout successfully!',3);
        }
    }
}
