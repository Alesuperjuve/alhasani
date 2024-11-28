<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri'; // Tentukan nama tabel di sini
    protected $primaryKey = 'id_santri'; // Nama kolom primary key

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}

 