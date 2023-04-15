<?php

namespace App\Http\Livewire;
use App\Models\Voyage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Listvoyage extends Component
{
  
    public function selectVoyage($voyageId)
    {
        // Emit an event to select the voyage
        $this->emit('selectVoyage', $voyageId);
    }
    public function render()
    {
        $voyages = Voyage::all();
        return view('livewire.listvoyage', ['voyages'=>$voyages]);
    }
}
