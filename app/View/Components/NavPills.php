<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavPills extends Component
{
    public $asramas;

    public function __construct($asramas)
    {
        $this->asramas = $asramas;
    }

    public function render()
    {
        return view('components.nav-pills');
    }
}
