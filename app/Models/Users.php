<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demande;

class Users extends Model
{ 
    use HasFactory;
    public $table = "utilisateur";
    protected $fillable =[
        "username"
    ];
    public function Demandes(){
        return $this->hasMany(Demande::class);
    }
    
}
