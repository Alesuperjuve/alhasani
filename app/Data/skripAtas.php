<?php

namespace App\Data;

class SkripAtas
{
    public static function getScripts()
    {
        return [
            "https://cdn.jsdelivr.net/npm/sweetalert2@11",
            "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js",
            asset('assets/js-alhasani/create-update-kamar.js'),
            asset('assets/js-alhasani/detail-santri.js'),
        ];
    }
}
