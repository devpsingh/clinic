<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessPage extends Controller
{
    public function index()
    {
        return view('successpage');
    }
}
