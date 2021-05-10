<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor as Dr;
use App\Models\DoctorEvent as DE;
use App\Models\EventUpdate as EU;

class Consult extends Controller
{
    public function index(Request $request)
    {
        $dr_id = $request->route('slug');
        $detail = Dr::find($dr_id);
        $email = $detail->email;
        $event=DE::where('email',$email)->get();
        $updatedDates=EU::where('dr_id',$dr_id)->get();
       
        return view('consult',['event'=>$event,'updatedEvents'=>$updatedDates]);
    }
}
