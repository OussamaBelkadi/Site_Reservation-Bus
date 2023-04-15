<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transport;
use App\Models\Condicteur;
use App\Models\voyage;
class Societe extends Model
{
    
    use HasFactory;
    protected $table = "societes";
    protected $fillable = ['name', 'image'];

   public function transports(){
    return $this->hasMany(Transport::class);
   }
   public function condicteur()
   {
    return $this->hasMany(Conduicteur::class);
   }
   public function voyages(){
    return $this->hasMany(Voyage::class);
   }
}
