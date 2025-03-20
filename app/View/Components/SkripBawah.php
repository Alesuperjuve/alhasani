<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkripBawah extends Component
{
    public $scripts;

    public function __construct()
    {
        // Mengambil data dari file config/skrip_bawah.php
        $this->scripts = config('skripBawah');
    }

    public function render()
    {
        return view('components.skripbawah');
    }
}