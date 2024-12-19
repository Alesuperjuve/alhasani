<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri'; // Tentukan nama tabel di sini
    protected $primaryKey = 'id_santri'; // Nama kolom primary key

    protected $fillable = [
        'nama_santri', 
        'nik', 
        'nisn', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'alamat', 
        'kota', 
        'status', 
        'pendidikan', 
        'kelas', 
        'hp_santri', 
        'hobi', 
        'email', 
        'tanggal_masuk_pondok',
        'tanggal_keluar_pondok',
        'tanggal_masuk_mts',
        'tanggal_keluar_mts',
        'tanggal_masuk_ma',
        'tanggal_keluar_ma',
        'sekolah_asal', 
        'alamat_sekolah_asal', 
        'nama_ayah', 
        'hidup_ayah', 
        'kerja_ayah', 
        'hp_ayah', 
        'nama_ibu', 
        'hidup_ibu', 
        'kerja_ibu', 
        'hp_ibu', 
        'nama_wali', 
        'status_wali', 
        'hp_wali'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}

 