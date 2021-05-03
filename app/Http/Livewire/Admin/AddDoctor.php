<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Speciality as sp;
use App\Models\Doctor as Dr;
class AddDoctor extends Component
{
    public $timeslot = [];
    public $name,$speciality,$email,$mobile,$clinic_name,
    $address,$city,$zip,$age,$alt_no,$gender="male";
    
   
    public function render()
    {
        return view('livewire.admin.add-doctor',['sp'=>sp::all()]);
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
    public function AddDoctor()
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
            $drData=Dr::where('email',$this->email)->get();
          
            if(count($drData)===0)
            {
                Dr::create([
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
                return back()->with('inf','Form submitted successfully');
            }
            else{
                return back()->with('warning','Email already exist.');
            }
             
         }
    }
}
