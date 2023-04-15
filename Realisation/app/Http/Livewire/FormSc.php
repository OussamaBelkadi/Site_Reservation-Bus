<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Societe;
use Livewire\Component;

class FormSc extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $companies;
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'max:1024',
        ]);

        $company = new Societe();
        $company->name = $this->name;
        $name = $this->image->getClientOriginalName();
        $this->image->storeAs('public/image', $name);
        $company->image = $name;
        $company->save();

        $this->name = '';
        $this->image = null;

        session()->flash('success', 'Company created successfully.');
        $this->companies = Societe::all();
    }
    public function mount()
    {
        $this->companies = Societe::all();
    }
    public function delete($id)
    {
        $company = Societe::find($id);
        if ($company) {
           
            $company->delete();
            session()->flash('success', 'Company deleted successfully.');
        }
        $this->companies = Societe::all();
    }
    public function render()
    {
        return view('livewire.form-sc');
    }
}
