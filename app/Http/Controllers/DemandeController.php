<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Suivie;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;



class DemandeController extends Controller
{
    
    public function showTable(){
        $data = Users::join('demande','demande.utilisateur_id','=', 'utilisateur.id')
                            ->join('suivie','suivie.demande_id','=','demande.id')
                            ->get(["suivie.id",'suivie.utilisateur_id','suivie.demande_id','demande.type','demande.regime','demande.libellé_tarifaire',"suivie.etat_demande","suivie.commentaire","suivie.fichier"]);
                            return view("service",compact('data'));
    }
    public function post(Request $request){
        if (session()->has("loggedUser")) {
            $user=Users::where("id","=", session("loggedUser"))->first();
            $data =[
                "loggedUserInfo"=> $user

            ];
        }
    }
     //-------------------------------------------------------------------------------  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @param  \App\Models\Users
     * @return \Illuminate\Http\Response
     */
    //Demande $demande 'select * from demande where utilisateur_id = :utilisateur_id', [session("loggedUser")]
    public function showClient()
    {
        if (session()->has("loggedUser")) {
             // $data = Demande::where("id","=",);
           //  $data = DB::select( 'select * from demande where utilisateur_id = :utilisateur_id', [session("loggedUser")]);
             $data = Users::join('demande','demande.utilisateur_id','=', 'utilisateur.id')
                     ->join('suivie','suivie.demande_id','=','demande.id')
                    ->where('suivie.utilisateur_id',"=",[session("loggedUser")])
                    ->get(["suivie.fichier","suivie.id",'suivie.utilisateur_id','suivie.demande_id','demande.type','demande.regime','demande.libellé_tarifaire',"suivie.etat_demande","suivie.commentaire","suivie.fichier"]);
           return view("demandeUser",compact('data'));
           

        }   
      // $data = Demande::where("id","=",);
      // $data = DB::select('select * from demande where id = :id', [7]);
       //$arr["data"]=$data; 
       //return view("demandeUser",$arr);
   
    } 
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @param  \App\Models\Users
     * @return \Illuminate\Http\Response
     */
    //Demande $demande 'select * from demande where utilisateur_id = :utilisateur_id', [session("loggedUser")]
    public function showService()
    {
        if (session()->has("loggedUser") && session()->has("is_service")) {
             
       $data = Demande::all();
       $arr["data"]=$data; 
       return view("service",$arr);
        }   
      // $data = Demande::where("id","=",);
      // $data = DB::select('select * from demande where id = :id', [7]);
       //$arr["data"]=$data; 
       //return view("demandeUser",$arr);
   
    } 

}