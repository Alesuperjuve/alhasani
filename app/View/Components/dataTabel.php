<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Illuminate\Pagination\LengthAwarePaginator;

class dataTabel extends Component
{
    public $rows;
    public $headers;
    public $search;

    public function __construct(LengthAwarePaginator $rows, $headers = [], $search = '')
    {
        $this->rows = $rows;
        $this->headers = $headers;
        $this->search = $search;
    }

    public function render()
    {
        return view('components.dataTabel');
    }
}
