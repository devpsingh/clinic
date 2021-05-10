<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor as Dr;
use App\Models\Appointment; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\EventUpdate as EU;

class Consult extends Component
{
    public $name;
    public $mobile;
    public $time;
    public $date;
    public $dr_id;
    public $details;
    public $updated_time=[];

    public function updated($field)
    {
        $this->validateOnly($field,[
            'name'=>'required|min:3|max:50',
            'mobile'=>'required|digit:10',
            'time'=>'required',
            'date'=>'required',
        ]);
    }
    public function submit()
    {
        $name = Str::ucfirst($this->name);
       $validation= $this->validate([
            'name'=>'required|min:3|max:50',
            'mobile'=>'required|digit:10',
            'time'=>'required',
            'date'=>'required',
        ]);
        if($validation)
        {
            Appointment::create([
                'patient_name'=>$name,
                'mobile_number'=>$this->mobile,
                'dr_id'=>$this->dr_id,
                'date'=>$this->date,
                'time'=>$this->time,
                'created_at'=>now()
            ]);
         }
        session()->flash('message', 'Thanks! Your appointment has been fixed successfully.');
        session()->flash('name',$name );
        session()->flash('mobile',$this->mobile );
        session()->flash('date',$this->date );
        session()->flash('time',$this->time );
        return redirect()->route('successpage');
    }
    public function mount(Request $request)
    {
        
        $this->dr_id = $request->route('slug');
        $this->details = Dr::where('id',$this->dr_id)->get();
      
    }
    public function render()
    {
        
        return view('livewire.consult');
    }
    public function updateddate()
    {
        $this->updated_time=EU::where('dr_id',$this->dr_id)
        ->where('updated_date',$this->date)->get();
    }
    
    
}
