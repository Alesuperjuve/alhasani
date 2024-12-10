<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class listPDF extends Component
{
    public $listPDF;  // Properti untuk data tabel
    public $headers;  // Properti untuk header tabel

    /**
     * Create a new component instance.
     */
    public function __construct($listPDF = [], $headers = [])
    {
        $this->listPDF = $listPDF;
        $this->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.list-pdf');
    }
}
