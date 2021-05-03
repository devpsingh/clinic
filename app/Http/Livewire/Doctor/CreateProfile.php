<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Speciality as sp;
use App\Models\Doctor as Dr;
use Auth;
use Livewire\WithFileUploads;

class CreateProfile extends Component
{
    use WithFileUploads;
    public $timeslot = [];
    public $name,$speciality,$email,$mobile,$clinic_name,
    $address,$city,$zip,$age,$alt_no,$gender="male";
    public $profilepic;
    public function render()
    {
        return view('livewire.doctor.create-profile',['sp'=>sp::all()]);
    }
    public function mount()
    {
        $this->email=Auth::user()->email;
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
            'profilepic'=>'image|mimes:jpeg,png,jpg,svg|max:1024',
        ]);

         if($validation)
         {
            $path = md5($this->profilepic . microtime()).'.'.$this->profilepic->extension();
            $this->profilepic->storeAs('public/avatar',$path);
            //dd($path);
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
                    'dr_photo_path'=>$path,
                ]);
                session()->flash('inf','Form submitted successfully');
                return redirect()->route('doctor.home');
            }
            else{
                return back()->with('warning','Profile already exists by this email address.Kindly go to update profile page');
            }
             
         }
    }
}
