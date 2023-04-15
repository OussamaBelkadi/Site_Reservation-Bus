<?php

namespace App\Http\Controllers;
use App\Models\Voyage;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Afficher la page de reservation.
    public function index($id){
        $voyage = Voyage::where('id',$id)->first();
        return view('check-tecket', ['voyage'=>$voyage]);
    }
}
