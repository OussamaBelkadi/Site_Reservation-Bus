<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use App\Models\Ville;
use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index(){
        $ville = Ville::all();
        $societe = Societe::all();
        return view('admin.voyage', ['villes'=>$ville, 'societe'=>$societe]);
    }
    public function desplay(){
        $voyages = Voyage::all();
         
        return view('admin.Voyages', ['voyages'=>$voyages , 'voyage']);
    }
    public function list(){
        $voyages = Voyage::all();
         
        return view('admin.ListVoyages', ['voyages'=>$voyages , 'voyage']);
    }
    public function updatefrom($id){
        $ville = Ville::all();
        $societe = Societe::all();
        $voyage = Voyage::find($id);
        return view('admin.formvoyage', ['villes'=>$ville, 'societe'=>$societe,'voyage'=>$voyage, 'id_voyage'=>$id]);
    }
     /**
    * Show the form for creating a new resource.
            *
            * @return RedirectResponse
    */
    public function modifier(Request $request,$id){
        $voyage = Voyage::find($id);
        $voyage->dateDepart = $request->dateDepart;
        $voyage->dateDariver = $request->dateDarriver;
        $voyage->dateVoyage = $request->dateVoyage;
        $voyage->prix = $request->prix;
        $voyage->societe_id = $request->societe_id;
        $voyage->transport_id = $request->transport_id;
        $voyage->villeDepart = $request->villeDepart;
        $voyage->villeArriver = $request->villeArriver;
        $voyage->maxPlace = 52;
        $voyage->save();
        return redirect()->route('voyage.list');
    }
}
