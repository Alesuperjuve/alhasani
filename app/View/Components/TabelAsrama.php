<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabelAsrama extends Component
{
    public $asramas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($asramas)
    {
        $this->asramas = $asramas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tabel-asrama');
    }
}
