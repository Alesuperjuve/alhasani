<?php

namespace App\Enums;

class enumPosisi
{
    public static function posisiTampil($enum)
    {
        $mapping = [
            0 => 'Ketua',
            1 => 'Wakil Ketua',
            2 => 'Sekretaris',
            3 => 'Wakil Sekretaris',
            4 => 'Bendahara 1',
            5 => 'Bendahara 2',
            6 => 'TU',
            7 => 'Anak Buah',
            99 => 'Non Job',
        ];

        return $mapping[$enum] ?? 'Tidak Diketahui';
    }
}
