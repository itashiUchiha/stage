<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function get(){
        return view("reponseDemande");
    }
}
