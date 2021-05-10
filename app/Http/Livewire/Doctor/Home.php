<?php

namespace App\Http\Livewire\Doctor;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Doctor as Dr;
use App\Models\DoctorEvent as DE;
use Livewire\WithFileUploads;

class Home extends Component
{
    //public $drdetail;
    use WithFileUploads;
    
    public $avatar;
    public $title=null;
    public $desc=null;
    public $tab='list';
    public $eventdatefrom=null;
    public $eventdateto=null;
    public $email;
    public function render()
    {
        $this->email = Auth::user()->email;
        $drdetail=Dr::where('email',Auth::user()->email)->get();
        $event = DE::where('email',Auth::user()->email)->get();
              
        return view('livewire.doctor.home',
        [
            'drdetail'=>$drdetail,
            'event'=>$event,
            
        ]);
    }
    public function updated($field)
    {
            $this->validateOnly($field,[
                'title'=>'required|min:3|max:20',
                'desc'=>'required|min:3|max:100',
                'eventdatefrom'=>'required',
                'eventdateto'=>'required',
            ]);
    }
    public function addEvent()
    {
        $validation=$this->validate([
            'title'=>'required|min:3|max:20',
            'desc'=>'required|min:3|max:100',
            'eventdatefrom'=>'required',
            'eventdateto'=>'required',
               ]);
               
               if($validation)
               {
                   DE::create([
                       'email'=>$this->email,
                       'title'=>$this->title,
                       'desc'=>$this->desc,
                       'eventdate'=>$this->eventdatefrom,
                       'eventdateto'=>$this->eventdateto,
                       ]);
               }
               return back()->with('success','Event addedd successfully');
               
    }
}
