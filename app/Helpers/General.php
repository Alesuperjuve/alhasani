<?php


//Fungsi jenis kelamin
if (!function_exists('gender_label')) {
    function gender_label($gender)
    {
        if ($gender === 'L') {
            return 'Laki-Laki';
        } elseif ($gender === 'P') {
            return 'Perempuan';
        }
        return 'Tidak Diketahui';
    }
}

//Fungsi tanggal 
if (!function_exists('format_tanggal')) {
    function format_tanggal($tanggal)
    {
        if (!$tanggal) {
            return '-';
        }

        $bulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        $tanggalParts = explode('-', $tanggal);

        if (count($tanggalParts) !== 3) {
            return '-'; // Format tanggal tidak valid
        }

        $tahun = $tanggalParts[0];
        $bulanIndex = (int) $tanggalParts[1];
        $hari = (int) $tanggalParts[2];

        return $hari . ' ' . ($bulan[$bulanIndex] ?? '-') . ' ' . $tahun;
    }
}