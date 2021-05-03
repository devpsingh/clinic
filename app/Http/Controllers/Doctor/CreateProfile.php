<?php
namespace App\Http\Controllers\Doctor;
use App\Http\Controllers\Controller;
class CreateProfile extends Controller
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
        return view('doctor.create_profile');
    }
}