<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linhaDoTempo extends Controller
{
    public function index()
    {
        return view('linha-do-tempo.index');
    }
}
