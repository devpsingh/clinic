<?php

namespace App\Http\Livewire\Doctor;
use Auth;
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
    public $eventdate=null;
    public function render()
    {
        $drdetail=Dr::where('email',Auth::user()->email)->get();
        $event = DE::where('email',Auth::user()->email)->get();
       // dd($drdetail);
        return view('livewire.doctor.home',['drdetail'=>$drdetail,'event'=>$event]);
    }
    public function updated($field)
    {
            $this->validateOnly($field,[
                'title'=>'required|min:3|max:20',
                'desc'=>'required|min:3|max:100',
                'eventdate'=>'required',
            ]);
    }
    public function addEvent()
    {
        $validation=$this->validate([
            'title'=>'required|min:3|max:20',
            'desc'=>'required|min:3|max:100',
            'eventdate'=>'required',
            
               ]);
               
               if($validation)
               {
                   DE::create([
                       'email'=>Auth::user()->email,
                       'title'=>$this->title,
                       'desc'=>$this->desc,
                       'eventdate'=>$this->eventdate,
                       ]);
               }
               return back()->with('success','Event addedd successfully');
               
    }
}
