<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor as Dr;
use App\Models\DoctorEvent as DE;

class Consult extends Controller
{
    public function index(Request $request)
    {
        $dr_id = $request->route('slug');
        $detail = Dr::find($dr_id);
        $email = $detail->email;
        $event=DE::where('email',$email)->get();
        return view('consult',['event'=>$event]);
    }
}
