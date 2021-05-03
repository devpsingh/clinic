<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Doctor as Dr;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
   
    public $searchTerm='';
    protected $queryString = ['searchTerm'];
    protected $paginationTheme = 'bootstrap';

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }
    
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
        return view('livewire.admin.home',['doctors'=>$result,'count'=>$count]);
    }
   
}
