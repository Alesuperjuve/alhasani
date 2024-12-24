<?php

namespace App\Data;

class sidebar
{
    public static function getAll()
    {
        return [
            [
                'no'    => 1,
                'title' => 'www.alhasani.com',
                'tombol' => [
                    [
                        'nama'  => 'Dashboard',
                        'icon'  => 'mdi mdi-apps menu-icon',
                        'link'  => 'dashboard',
                        'level'  => '1'
                    ],
                ],
            ],
            [
                'no'    => 2,
                'title' => 'Pesantren',
                'tombol' => [
                    [
                        'nama'  => 'Profil',
                        'icon'  => 'mdi mdi-floor-plan menu-icon',
                        'link'  => 'pesantren',
                        'level'  => '1'
                    ],
                ],
            ],
            [
                'no'    => 3,
                'title' => 'Sistem Manajemen',
                'tombol' => [
                    [
                        'nama'  => 'Santri',
                        'icon'  => 'mdi mdi-account-circle-outline menu-icon',
                        'link'  => 'santri.index',
                        'level'  => '1'
                    ],
                    [
                        'nama'  => 'Kamar',
                        'icon'  => 'mdi mdi-table menu-icon',
                        'link'  => 'kamar',
                        'level'  => '1'
                    ],
                    [
                        'nama'  => 'Keuangan',
                        'icon'  => 'mdi mdi-chart-line menu-icon',
                        'link'  => 'keuangan',
                        'level'  => '1'
                    ],
                    [
                        'nama'  => 'Skincare',
                        'icon'  => 'mdi mdi-layers-outline menu-icon',
                        'link'  => 'madrasah',
                        'level'  => '1'
                    ],
                ],
            ],
            [
                'no'    => 4,
                'title' => 'Dokumentasi',
                'tombol' => [
                    [
                        'nama'  => 'Kartu',
                        'icon'  => 'mdi mdi-card-text-outline menu-icon',
                        'link'  => 'kartu',
                        'level'  => '1'
                    ],
                    [
                        'nama'  => 'Laporan',
                        'icon'  => 'mdi mdi-account-box-outline menu-icon',
                        'link'  => 'laporan',
                        'level'  => '2'
                    ],
                    [
                        'nama'  => 'Report',
                        'icon'  => 'mdi mdi-account-box-outline menu-icon',
                        'link'  => 'dashboard',
                        'level'  => '2'
                    ],
                    [
                        'nama'  => 'Cetak PDF',
                        'icon'  => 'mdi mdi-file-document menu-icon',
                        'link'  => 'cetakPDF',
                        'level'  => '1'
                    ],
                ],
            ],
        ];
    }
}
