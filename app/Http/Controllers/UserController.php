<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use App\Models\Users;
class UserController extends Controller
{
    //function principales
    public function index(){
    $data = Users ::where('id',7)->get();
    //$data= DB::select('select * from utilisateur');
    return $data;
    }
}
