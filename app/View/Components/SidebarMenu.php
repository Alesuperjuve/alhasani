<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Data\sidebar;

class SidebarMenu extends Component
{
    public $menu;
    public $level;

    public function __construct($level = 'all')
    {
        $this->level = $level;
        $this->menu  = $this->filterMenu(sidebar::getAll(), $level);
    }

    private function filterMenu($menus, $level)
    {
        if ($level === 'all') {
            return $menus;
        }

        foreach ($menus as &$menu) {
            $menu['tombol'] = array_filter($menu['tombol'], function ($tombol) use ($level) {
                return $tombol['level'] == $level;
            });
        }

        return array_filter($menus, fn($menu) => count($menu['tombol']) > 0);
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
