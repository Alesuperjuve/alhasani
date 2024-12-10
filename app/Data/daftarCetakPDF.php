<?php

namespace App\Data;

class daftarCetakPDF
{
    public static function getAll()
    {
        return [
            ['NO' => 1, 'NAMA' => 'Data Semua Santri', 'LINK' => 'cetak', 'KET' => 'Data sudah lengkap'],
            ['NO' => 2, 'NAMA' => 'Data Santri MTS', 'LINK' => 'cetak', 'KET' => 'Ada santri dari Medan belum mengisi'],
            ['NO' => 3, 'NAMA' => 'Data Santri MA', 'LINK' => 'cetak', 'KET' => ' - '],
            ['NO' => 4, 'NAMA' => 'Data Santri Tahfidz', 'LINK' => 'cetak', 'KET' => 'Sudah Lengkap'],
            ['NO' => 5, 'NAMA' => 'Data Semua Kamar', 'LINK' => 'cetak', 'KET' => 'Kamar beserta kuotanya'],
            ['NO' => 6, 'NAMA' => 'Data Kamar Beserta Penghuni', 'LINK' => 'cetak', 'KET' => 'Kamar dan penghuni lengkap'],
            
        ];
    }
}
