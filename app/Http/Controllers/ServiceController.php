<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Demande;
use App\Models\Suivie;
use Illuminate\Support\Facades\Response;
class ServiceController extends Controller
{
public function get(){
    return view("service");
}
public function getDemandeById($id){
    $demande = Demande::where("id",$id)->first();
    return view("UneDemande",compact("demande"));
}
public function reponseDemande($id){
    $suivie = Suivie::find($id);
    return view("reponseDemande",compact("suivie"));
}

public function SendReponseDemande(Request $request){
    $suivie = Suivie::find($request->id);

    $file = $request->fichier;
        $filename=time().'.'.$file->getClientOriginalExtension();
       $request->fichier->move('assets',$filename);
    $suivie->etat_demande = $request->etat_demande;
    $suivie->commentaire = $request->commentaire;
        $suivie->fichier= $filename;

    $suivie->save();
    return back()->with("send_reponse","la reponse a été envoyer");
}
public function download(Request $request,$fichier){
   //return response()->download('assets/'.$fichier);
 return response()->download(public_path("assets/".$fichier));
}


}