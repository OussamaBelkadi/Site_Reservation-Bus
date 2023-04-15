<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;

class ConduicteurVoy extends Component
{
    use WithFileUploads;
    public $conduicteurs;

    public function mount(){
        $this->conduicteurs = Conduicteur::all();
    }
    public function render()
    {
        return view('livewire.conduicteur');
    }
}
