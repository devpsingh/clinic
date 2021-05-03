<?php
namespace App\Http\Controllers\Doctor;
use App\Http\Controllers\Controller;
use App\Models\DoctorEvent as DE;
use auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DE::where('email',Auth::user()->email)->get();
        return view('doctor.home',['event'=>$event]);
    }
}