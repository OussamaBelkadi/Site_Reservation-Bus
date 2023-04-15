<?php

namespace App\Models;
use App\Models\Transport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conduicteur extends Model
{
    use HasFactory;
    
    public function societes(){
        return  $this->belongsTo(Societe::class);
    }
    public function transport(){
        return $this->belongsTo(Transport::class);
    }
}
