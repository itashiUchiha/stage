

    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        return View("uploadFile");
    }
    public function succes(Request $request)
    {
        $data=  new Suivie();
        //8$file = $request->fichier;
        //$filename=time().'.'.$file->getClientOriginalExtension();
           //     $request->fichier->move('assets',$filename);
             //   $data->fichier= $filename;
                $data->etat_demande->$request->etat_demande;
                $data->commentaire->$request->commentaire;
                $data->save();
                dd($data);
                $data->redirect()->back();


    }
    public function post(Request $request){

       /*  if (session()->has("loggedUser")) {
            $user=Users::where("id","=", session("loggedUser"))->first();
            $data =[
                "loggedUserInfo"=> $user

            ];  
        } */
       
        
        $request->validate([
            "fichier"=>"required"
            //"libele"=>"required",
            //"regime"=>"required"
            
        ]);
               
        

       $query= DB::table('demande')
                ->insert([
                    "fichier"=>$request->fichier,
                   "commentaire"=>$request->commentaire,
                    "etat_demande"=>$request->status,
                    "date_debut"=>$request->session(),
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
}
