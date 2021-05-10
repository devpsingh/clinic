<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor as Dr;
use Livewire\WithPagination;

class Doctor extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
   
    public $searchTerm='';
    protected $queryString = ['searchTerm'];

    public function render()
    {
          $result = Dr::where('name','like', '%'.$this->searchTerm.'%')
            ->orwhere('city','like', '%'.$this->searchTerm.'%')
            ->orwhere('speciality','like', '%'.$this->searchTerm.'%')
            ->orwhere('email','like', '%'.$this->searchTerm.'%')
            ->orwhere('mobile','like', '%'.$this->searchTerm.'%')
            ->paginate(10);
            $count=Dr::where('name','like', '%'.$this->searchTerm.'%')
            ->orwhere('city','like', '%'.$this->searchTerm.'%')
            ->orwhere('speciality','like', '%'.$this->searchTerm.'%')
            ->orwhere('email','like', '%'.$this->searchTerm.'%')
            ->orwhere('mobile','like', '%'.$this->searchTerm.'%')
            ->get();
            $count = $count->count();
        return view('livewire.doctor',['doctors'=>$result,'count'=>$count]);
    }
    public function updatingsearch()
    {
        $this->resetPage();
    }
   
}
