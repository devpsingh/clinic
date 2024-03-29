<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
     
     public $count = 1;
    public function increment()
    {
    	return $this->count++;
    }
    public function decrement()
    {
    	
        if($this->count > 0)
        {
            $this->count--;
        }
    }
    public function render()
    {
        return view('livewire.navbar');
    }
   
}
 