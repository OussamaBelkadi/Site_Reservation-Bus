<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transport;
use App\Models\Conduicteur;
use Illuminate\Support\Facades\DB;

use Livewire\WithFileUploads;

class TransportForm extends Component
{
    use WithFileUploads;
    // public $idsociete;
    public $marque;
    public $matricule;
    public $image;
    public $societe_id;
    public $age;
    public $nom;
    public $imageConduicteur;
    public $nameCod;
    public $transports;
    
   
    public function mount($societe_id)
    {
        $this->societe_id = $societe_id->id;
        $this->image = null;
        $this->imageConduicteur = null;
        
    }
   
    public function save()
    {
        $this->emit('save');
        $this->validate([
            'image' => 'required|image|max:1024',
            'marque' => 'required',
            'matricule' => 'required',
           
        ]);

        $transport = new Transport();
        $transport->marque = $this->marque;
        $name = $this->image->getClientOriginalName();
        $this->image->storeAs('public/image', $name);
        $transport->image = $name;
        $transport->matricule = $this->matricule;
        $transport->societe_id = $this->societe_id;

        if ($transport->save()) {
            $this->image = null;
            $id = DB::table('transports')->select('id')->latest()->first();
            $path = $this->imageConduicteur->getClientOriginalName();
            $this->imageConduicteur->storeAs('public/image', $path);
            $conduicteur = new Conduicteur();
            $conduicteur->name = $this->nom;
            $conduicteur->age = $this->age;
            $conduicteur->imageConduicteur = $path;
            $conduicteur->transport_id = $id->id;
            $conduicteur->societe_id = $this->societe_id;
            $conduicteur->save();
           
            // $this->image = '';
            // $this->imageConduicteur = null;
        }

       
       $this->reset(['marque', 'matricule', 'nom' , 'age']);

        session()->flash('success', 'Company created successfully.');
        $this->transports = Transport::all();
    }
    public function render ()
    {
        
        return view('livewire.transport-form');
    }
}
