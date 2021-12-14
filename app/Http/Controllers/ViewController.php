<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function ETS()
    {
        return view('ets');
    }
    function PHP()
    {
        return view('php');
    }
}
