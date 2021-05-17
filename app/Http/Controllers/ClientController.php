<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Symfony\Component\ErrorHandler\Debug;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    public function get(){
        return view("client");
    }

    public function post(Request $request){
        if (session()->has("loggedUser")) {
            $user=Users::where("id","=", session("loggedUser"))->first();
            $data =[
                "loggedUserInfo"=> $user

            ];
        }
       
        
        $request->validate([
            "type"=>"required",
           "libele"=>"required",
            "regime"=>"required",
            "dete_debut"=>"required",
            "date_fin"=>"required"
        ]);
               
        

       $query= DB::table('demande')
                ->insert([
                    "type"=>$request->type,
                   "libellé_tarifaire"=>$request->libele,
                    "regime"=>$request->regime,
                    "date_debut"=>$request->date_debut,
                    "date_fin"=>$request->date_fin,
                    "utilisateur_id"=>$user->id
                    
                   
                ]); 
        
        
        
        if ($query) {
            echo "effectuer";

        } else {
            echo "non";

        }
        
        return redirect("client");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
}
