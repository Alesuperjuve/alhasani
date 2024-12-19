<?php

namespace App\Data;

class menuStatistik
{
    public static function getAll()
    {
        return [
            [
                'no'     => 1,
                'title'  => 'Overall',
                'id'     => 'home-tab',
                'target' => 'overview',
                'class'  => 'nav-link active ps-0',
                'area'   => 'true',
                'aktif'  => '1',
                'stat'   => [
                    [
                        'statSanMas'    => 'Santri Masuk',
                        'statTotalSan'  => 'Total Santri',
                        'kuotaKam'      => 'Kuota Kamar',
                        'kuotaIsi'      => 'Kuota Terisi',
                        'statTrans'     => 'Transaksi',

                    ],
                ],
            ],
            [
                'no'     => 2,
                'title'  => 'MTS Al-Hasani',
                'id'     => 'profile-tab',
                'target' => 'audiences',
                'class'  => 'nav-link',
                'area'   => 'false',
                'aktif'  => '1',
                'stat'   => [
                    [
                        'statSanMas'    => 'Santri Masuk MTS',
                        'statTotalSan'  => 'Total Santri MTS',
                        'kuotaKam'      => 'Kuota Kamar MTS',
                        'kuotaIsi'      => 'Kuota Terisi MTS',
                        'statTrans'     => 'Transaksi MTS',
                    ],
                ],
            ],
            [
                'no'     => 3,
                'title'  => 'MA Al-Hasani',
                'id'     => 'contact-tab',
                'target' => 'demographics',
                'class'  => 'nav-link',
                'area'   => 'false',
                'aktif'  => '1',
                'stat'   => [
                    [
                        'statSanMas'    => 'Santri Masuk MA',
                        'statTotalSan'  => 'Total Santri MA',
                        'kuotaKam'      => 'Kuota Kamar MA',
                        'kuotaIsi'      => 'Kuota Terisi MA',
                        'statTrans'     => 'Transaksi MA',
                    ],

                ],
            ],
            [
                'no'     => 4,
                'title'  => 'Tahfidz',
                'id'     => 'tahfidz-tab',
                'target' => 'tahfidz',
                'class'  => 'nav-link',
                'area'   => 'false',
                'aktif'  => '1',
                'stat'   => [
                    [
                        'statSanMas'    => 'Santri Masuk Tahfidz',
                        'statTotalSan'  => 'Total Santri Tahfidz',
                        'kuotaKam'      => 'Kuota Kamar Tahfidz',
                        'kuotaIsi'      => 'Kuota Terisi Tahfidz',
                        'statTrans'     => 'Transaksi Tahfidz',
                    ],
                ],
            ],
            [
                'no'     => 5,
                'title'  => 'Dito',
                'id'     => 'disclaimer-tab',
                'target' => 'disclaimer',
                'class'  => 'nav-link',
                'area'   => 'false',
                'aktif'  => '1',
                'stat'   => [
                    [
                        'statSanMas'    => 'Santri Masuk Disclaimer',
                        'statTotalSan'  => 'Total Santri Disclaimer',
                        'kuotaKam'      => 'Kuota Kamar Disclaimer',
                        'kuotaIsi'      => 'Kuota Terisi Disclaimer',
                        'statTrans'     => 'Transaksi Disclaimer',
                        
                    ],
                ],
            ],
        ];
    }
}
