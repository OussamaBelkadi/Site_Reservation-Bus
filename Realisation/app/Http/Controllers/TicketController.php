<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Societe;
use App\Models\Voyage;
use App\Models\Avi;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    // Affiche la page Home (accueil)
    public function index(){
        $ville = Ville::all();
        $societ = Societe::first();
        $avi = Avi::all();
        $id = $societ->id;
        $societe = DB::table('societes')->offset(1)->limit(PHP_INT_MAX)->get();
        return view('Home', ['villes'=>$ville, 'societes'=>$societe, 'societe'=>$societ, 'avis'=>$avi]);
    }
    // Affiche le page du Ticket de Voyage
    public function ticket(Request $request){
        $fer = $request->villeArriver;
        $voyages = Voyage::where('dateVoyage', $request->dateVoyage)->where('villeDepart', $request->villeDepart)->where('villeArriver', $request->villeArriver)->get();
        $ville = Ville::all();
        return view('ticket', ['tickets'=>$voyages, 'villes'=>$ville]);
    }
    public function reserve(Request $request){
        $seatnumber = json_decode($request->seats);
        // $Q = array_map(function($s){
        //     print_r($s);echo('<br/>');
        // }, $seatnumber);
        // dd($request->all());
        session()->put('form-data', ['seats'=>json_decode($request->seats)]);
        return redirect()->route('reserve.ter');
    }
    public function ter(){
        $form = session()->get('form-data');

        dd($form[1]['seats']);
    }
}
