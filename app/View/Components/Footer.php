<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    
    public $dataPesantren;

    public function __construct($dataPesantren = null)
    {
        $this->dataPesantren = $dataPesantren;
    }


    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
