<?php

namespace App\Http\Livewire;
use App\Models\Transport;
use Livewire\Component;
use App\Models\Voyage;
use Session;
class FormVoyage extends Component
{
    public $villes;
    public $societes;
    public $reservedTran;
    public $transport;

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
    public $ch;

    
    public function mount($villes,$societes){
        $this->villes = $villes;
        $this->societes = $societes;
        $this->transport = Transport::all();
    }
    public function getVehiclesForCompany($societeId)
    {
        return Transport::where('societe_id', $societeId)->get();
    }

    public function getSelectedCompanyVehicles()
    {
        $this->transport = $this->getVehiclesForCompany($this->selectedCompany);
        $this->ch = $this->selectedCompany;
    }
    public function reservedTransport($transport, $date){
        return Voyage::where('transport_id', $transport)->where('dateVoyage', $date)->first();
    }
    public function save(){
       $this->validate([
        'dateVoyage' => 'required|date',
        'dateDarriver' => 'required|date_format:H:i',
        'dateDepart' => 'required|date_format:H:i',
        'prix' => 'required|integer',
        'villeDepart' => 'required|string',
        'villeDarriver' => 'required|string',
        'place' => 'required|integer',
        'selectedCompany' => 'required|integer',
        'selectedVehucule' => 'required|integer',
       ]);
        $voyage = new Voyage();
        $voyage->dateDepart = $this->dateDepart;
        $voyage->dateDariver = $this->dateDarriver;
        $voyage->dateVoyage = $this->dateVoyage;
        $voyage->prix = $this->prix;
        $voyage->villeDepart = $this->villeDepart;
        $voyage->villeArriver = $this->villeDarriver;
        $voyage->maxPlace = $this->place;
        $voyage->societe_id = $this->selectedCompany;
        $voyage->transport_id = $this->selectedVehucule;
        $this->reservedTran = $this->reservedTransport($this->selectedVehucule, $this->dateVoyage);
        if (empty($this->reservedTran)) {
            $voyage->save();
            $this->reset(['dateDepart','dateDarriver', 'dateVoyage', 'prix', 'villeDarriver','villeDepart', 'place', 'selectedCompany', 'selectedVehucule']);
            return redirect()->to('/voyage');
            $this->reservedTram = 'Le bus est reserver!';
            $this->reset(['dateDepart','dateDarriver', 'dateVoyage', 'prix', 'villeDarriver','villeDepart', 'place', 'selectedCompany', 'selectedVehucule']);

        }
        
        
        
    }
    public function render()
    {
        return view('livewire.form-voyage',['reservedTran'=>$this->reservedTram]);
    }
}
