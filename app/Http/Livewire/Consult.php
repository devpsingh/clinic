<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor as Dr;
use App\Models\Appointment; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Consult extends Component
{
    public $name;
    public $mobile;
    public $time;
    public $date;
    public $dr_id;
    public function submit()
    {
        $name = Str::ucfirst($this->name);
        Appointment::create([
            'patient_name'=>$name,
            'mobile_number'=>$this->mobile,
            'dr_id'=>$this->dr_id,
            'date'=>$this->date,
            'time'=>$this->time,
            'created_at'=>now()
        ]);
        session()->flash('message', 'Thanks! Your appointment has been fixed successfully.');
        session()->flash('name',$name );
        session()->flash('mobile',$this->mobile );
        session()->flash('date',$this->date );
        session()->flash('time',$this->time );
        return redirect()->route('successpage');
    }
    public function render(Request $request)
    {
        $this->dr_id = $request->route('slug');
        $details = Dr::where('id',$this->dr_id)->get();
        return view('livewire.consult',['details'=>$details]);
    }
    
    
}
