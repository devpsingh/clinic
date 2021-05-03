<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Speciality as sp;
use App\Models\Doctor as Dr;
use Illuminate\Http\Request;

class Updateselecteddoctor extends Component
{
    public $timeslot = [];
    public $name,$speciality,$email,$mobile,$clinic_name,
    $address,$city,$zip,$age,$alt_no,$gender="male";
    public $data;
    public function render()
    {

        return view('livewire.admin.updateselecteddoctor',['sp'=>sp::all()]);
    }
    public function mount(Request $req)
    {
        $data=Dr::find($req->dr_id);
        $this->data = $data;
        $this->name=$data->name;
        $this->speciality=$data->speciality_id;
        $this->email=$data->email;
        $this->mobile=$data->mobile;
        $this->clinic_name=$data->clinic_name;
        $this->address=$data->address;
        $this->city=$data->city;
        $this->zip=$data->pin;
        $this->age=$data->age;
        $this->alt_no=$data->alt_contact;
        $this->gender=$data->gender;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'timeslot' => 'required',
            'speciality' => 'required',
            'clinic_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required|digits:6',
            'age' => 'required',
            'alt_no' => 'required|max:12',
        ]);
    }
    public function updateDr($id)
    {
        
        $validation = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|min:4',
            'mobile' => 'required|digits:10',
            'timeslot' => 'required',
            'speciality' => 'required',
            'clinic_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required|digits:6',
            'age' => 'required',
            'alt_no' => 'required|max:12',
        ]);

         if($validation)
         {
            
            //dd(json_encode($this->timeslot),);
            $drData=Dr::findOrFail($id);
                      
                 $drData->update([
                    'speciality_id'=>$this->speciality,
                    'name'=>$this->name,
                    'email'=>$this->email,
                    'mobile'=>$this->mobile,
                    'clinic_name'=>$this->clinic_name,
                    'address'=>$this->address,
                    'city'=>$this->city,
                    'pin'=>$this->zip,
                    'age'=>$this->age,
                    'gender'=>$this->gender,
                    'alt_contact'=>$this->alt_no,
                    'timeslot'=>json_encode($this->timeslot),
                ]);
                return back()->with('inf','Doctor informatioin updated successfully');
           
             
         }
    }
}
