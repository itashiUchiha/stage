<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;
use App\Models\Users;

class SignupController extends Controller
{
   public function get()
   {
    return view("signup");
    }

    public function post(Request $request)
   {
       $request->validate([
        "username"=>"required",
        "password"=>"required" 
       ]);
       // verification des infroamation au niveau db
       $user = Users::where("username","=",$request->username)->first();
       if ($user) {
           if ($user['password']== $request->password) {

               $request->session()->put("loggedUser",$user->id);
               $request->session()->put("is_service",$user->is_service);
                if (session("is_service")==1) {
                    return redirect("service");
                } else {
                    return redirect("client");
                }
                
              
            
           } else {
               return back()->with('fail','invalid password');
           }
       } else {
           return back()->with("fail","non account");
       }
       
    }

    public function client(){
        if (session()->has("loggedUser")) {
            $user=Users::where("id","=", session("loggedUser"))->first();
            $data =[
                "loggedUserInfo"=> $user

            ];
        }
        return view("client", $data);
    }
    public function logout(){
        if (session()->has("loggedUser")) {
            session()->pull("loggedUser");
            return redirect("signup");
        }
    }
}
