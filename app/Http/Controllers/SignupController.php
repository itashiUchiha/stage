<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;
class SignupController extends Controller
{
   public function get()
   {
    return view("signup");
    }
    public function post(Request $request)
   {
       $array["username"]= "required";
       $validatet =$request->validate($array);
       print_r($request->all());
    return view("signup");
    }
}
