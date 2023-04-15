<?php

namespace App\Http\Livewire;
use App\Models\Transport;
use Livewire\Component;
use App\Models\Voyage;
use Session;
class Modifiervoyage extends Component
{
    public $villes;
    public $societes;
    public $reservedTran;
    public $transport;
    public $id_voyage;
    public $dateVoyage;
    public $dateDepart;
    public $dateDarriver;
    public $villeDepart;
    public $villeDarriver;
    public $prix;
    public $place;
    public $selectedCompany;
    public $selectedVehucule;
    public $reservedTram;
    public $voyage;

    
    public function mount($villes,$societes,$id_voyage){
        // $this->villes = $villes;
        // $this->societes = $societes;
        $this->transport = Transport::all();
        // // Recuperation des donnees
        // $this->voyage = Voyage::where('id',$id_voyage)->first();
        // // Insertion des donnees
        // $this->dateDepart = $this->voyage->dateDepart ;
        // $this->dateDarriver = $this->voyage->dateDariver ;
        // $this->dateVoyage = $this->voyage->dateVoyage ;
        // $this->prix = $this->voyage->prix;
        // $this->villeDepart = $this->voyage->villeDepart;
        // $this->villeDarriver = $this->voyage->villeArriver;
        $this->id_voyage = $id_voyage;
     }
    public function getVehiclesForCompany($societeId)
    {
        return Transport::where('societe_id', $societeId)->get();
    }

    public function getSelectedCompanyVehicles()
    {
        $this->transport = $this->getVehiclesForCompany($this->selectedCompany);
       
    }
    public function reservedTransport($transport, $date){
        return Voyage::where('transport_id', $transport)->where('dateVoyage', $date)->first();
    }
    
    public function render()
    {
        return view('livewire.modifiervoyage',['reservedTran'=>$this->reservedTram]);
    }
}
