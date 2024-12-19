<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkCss extends Component
{
    public $cssLinks;

    public function __construct()
    {
        // Ambil daftar link CSS dari file konfigurasi
        $this->cssLinks = config('cssLinks.css_links');
    }

    public function render()
    {
        return view('components.link-css');
    }
}