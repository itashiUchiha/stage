<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Suivie;

class Demande extends Model
{
    use HasFactory;
    protected $table = "demande";
    public function utilisateur(){
        return $this->belongsTo(Users::class);
    }

    public function suivie(){
        return $this->hasOne(Suivie::class);
    }
}
