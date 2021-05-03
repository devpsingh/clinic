<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Doctor as Dr;
use App\Models\Speciality as Sp; 
class Updatedoctor extends Component
{
    public $specialitySelect=null;
    public $doctors;

    public function render()
    {
        return view('livewire.admin.updatedoctor',['Speciality'=>Sp::all()]);
    }
    public function updatedspecialitySelect($id)
    {
        
         $this->doctors=Dr::where('speciality_id',$id)->get();
    }
    public function edit($id)
    {
        $data = Dr::find($id);
      return redirect()->route('admin.update',['dr_id'=>$data]);

    }
}
