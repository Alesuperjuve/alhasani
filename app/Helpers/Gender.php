<?php

namespace App\Helpers;

class Gender
{
    public static function GenderHelp($jk)
    {
        if ($jk === 'L') {
            return 'Laki-laki';
        } elseif ($jk === 'P') {
            return 'Perempuan';
        } else {
            return 'Tidak diketahui';
        }
    }
}
