<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demande;

class Suivie extends Model
{
    use HasFactory;
    protected $table = "suivie";
    public function Demande(){
        return $this->belongsTo(Demande::class);
    }


}
