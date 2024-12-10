<?php

namespace App\Data;

class sidebar
{
    public static function getAll()
    {
        return [
            [
                'no'    => 1,
                'title' => 'www.sidebardinamis.com',
                'tombol' => [
                    [
                        'nama'  => 'Dashboard',
                        'icon'  => 'mdi mdi-apps menu-icon',
                        'link'  => 'dashboard'
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
                        'link'  => 'pesantren'
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
                        'link'  => 'santri.index'
                    ],
                    [
                        'nama'  => 'Kamar',
                        'icon'  => 'mdi mdi-table menu-icon',
                        'link'  => 'kamar'
                    ],
                    [
                        'nama'  => 'Keuangan',
                        'icon'  => 'mdi mdi-chart-line menu-icon',
                        'link'  => 'keuangan'
                    ],
                    [
                        'nama'  => 'Madrasah',
                        'icon'  => 'mdi mdi-layers-outline menu-icon',
                        'link'  => 'madrasah'
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
                        'link'  => 'kartu'
                    ],
                    [
                        'nama'  => 'Laporan',
                        'icon'  => 'mdi mdi-account-box-outline menu-icon',
                        'link'  => 'laporan'
                    ],
                    [
                        'nama'  => 'Cetak PDF',
                        'icon'  => 'mdi mdi-file-document menu-icon',
                        'link'  => 'cetakPDF'
                    ],
                ],
            ],
        ];
    }
}
