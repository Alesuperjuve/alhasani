<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewKamarSantri extends Model
{
    // Nama tabel yang digunakan oleh model
    protected $table = 'view_kamar_santri';

    // Nonaktifkan timestamps jika tidak ada kolom created_at dan updated_at
    public $timestamps = false;

    // Tentukan kolom-kolom yang dapat diakses (opsional)
    protected $fillable = [
        'id_kamar', 'nama_kamar', 'lantai', 'kapasitas', 'jumlah_penghuni'
    ];
}
