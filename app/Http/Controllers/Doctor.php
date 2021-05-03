<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctor extends Controller
{
    public function index()
    {
        return view('doctors');
    }
}
