<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor as Dr;
use App\Models\Speciality as Sp;
use Livewire\WithPagination;
class Doctor extends Component
{
    use WithPagination;
    public $specialitySelect=null;
    public $doctors;
    
    public function render()
    {
       
        return view('livewire.doctor',['Speciality'=>Sp::all()]);
    }
   public function updatedspecialitySelect($id)
   {
       
        $this->doctors=Dr::where('speciality_id',$id)->get();
        
   }
    
}
