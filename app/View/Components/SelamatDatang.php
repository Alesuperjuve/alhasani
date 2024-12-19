<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Helpers\FruitHelper;

class SelamatDatang extends Component
{
    public $randomFruit;

    public function __construct()
    {
        
        $this->randomFruit = FruitHelper::getRandomFruit();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.selamat-datang');
    }
}
