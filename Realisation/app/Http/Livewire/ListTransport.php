<?php

namespace App\Http\Livewire;
use App\Models\Transport;
use Livewire\Component;

class ListTransport extends Component
{
    public $transports;
    protected $listeners = ['save'];
 
    public function save(){
        $this->transports = Transport::all();
    }
    public function mount(){
        $this->transports = Transport::all();
    }
    public function delete($id){
        $transport = Transport::find($id);
        if ($transport) {
            $transport->delete();
        }
        $this->transports = Transport::all();
    }
    public function render()
    {
        return view('livewire.list-transport');
    }
}
