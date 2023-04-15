<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Conduicteur;
use App\Models\Societe;
use App\Models\Voyage;
class Transport extends Model
{
    use HasFactory;
    
    public function societe(){
       return $this->belongsTo(Societe::class);
    }
    public function condecteur(){
        return $this->hasOne(Conduicteur::class);
    }
    public function voyage(){
        return $this->hasOne(Voyage::class);
    }
}
