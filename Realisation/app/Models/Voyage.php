<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Societe;
use App\Models\Transport;
class Voyage extends Model
{
    use HasFactory;
    public function societe(){
        return $this->belongsTo(Societe::class);
    }
    public function transport(){
        return $this->belongsTo(Transport::class);
    }
}
