<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use App\Models\DoctorEvent as DE;
use App\Models\Doctor as Dr;
use App\Models\EventUpdate as EU;

class Schedule extends Component
{
    public $timeslot = [];
    public $date=null;
    public $drid;
    public function render()
    {
        return view('livewire.doctor.schedule');
    }
    public function mount(Request $req)
    {
        $this->drid=$req->route('slug');
    }
    public function update($field)
    {
        $this->validateOnly($field,[
            'timeslot'=>'required',
            'date'=>'required',
        ]);
    }
    public function schedule($id)
    {
     
        $validate=$this->validate([
            'timeslot'=>'required',
            'date'=>'required',
        ]);
    
        $dr = Dr::find($id);
        if(Auth::user()->email==$dr->email && $validate)
        {
                $eventCheck = EU::where('updated_date',$this->date)->get();
                //dd(count($eventCheck));
                if(count($eventCheck)==0)       
                {     
                    EU::create([
                        'dr_id'=>$id,
                        'updated_date'=>$this->date,
                        'updated_timeslot'=>json_encode($this->timeslot),
                    ]);
                    return back()->with('inf','Patient schedule changed successfully'); 
                }
                else
                {
                    $eventCheck = EU::where('updated_date',$this->date)
                    ->where('dr_id',$id);
                  
                    $eventCheck->update([
                        'updated_date'=>$this->date,
                        'updated_timeslot'=>json_encode($this->timeslot),
                    ]);
                    return back()->with('inf','Schedule already exits has been updated');
                }
            }
                    
    }
}
