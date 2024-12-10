<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KartuController extends Controller
{
    public function index()
    {
        return view('kartu');
    }
}
