<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Conduicteur;

class ConduicteurVoyage extends Component
{
    use WithFileUploads;
    public $conduicteurs;
    

    public function mount(){
        $this->conduicteurs = Conduicteur::all();
    }
    public function delete($conduicteurId){
        $conduicteurVoy = Conduicteur::find($conduicteurId);
        if ($conduicteurVoy) {
            $conduicteurVoy->delete();
        }
        $this->conduicteurs = Conduicteur::all();
    }
    public function render()
    {
        return view('livewire.conduicteur-voyage');
    }
}
