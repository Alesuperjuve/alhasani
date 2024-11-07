<?php

namespace App\Http\Controllers;

use App\Models\Pesantren;
use Illuminate\Http\Request;

class PesantrenController extends Controller
{
    public function index()
    {
        $pesantren = Pesantren::find(1); 
        return view('pesantren', compact('pesantren'));
    }
}
