<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDemandeController extends Controller
{
    public function index(){
        return view("UserDemande");
    }
}
