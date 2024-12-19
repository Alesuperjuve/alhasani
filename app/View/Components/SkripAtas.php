<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Data\SkripAtas as SkripData;


class SkripAtas extends Component
{
    public $scripts;

    public function __construct()
    {
        $this->scripts = SkripData::getScripts();
    }

    public function render()
    {
        return view('components.skrip-atas');
    }
}