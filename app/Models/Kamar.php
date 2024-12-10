<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table        = 'kamar';
    protected $primaryKey   = 'id_kamar';

    protected $fillable     = ['nama_kamar', 'lantai', 'kapasitas', 'id_asrama'];

    public function asrama()
    {
        return $this->belongsTo(Asrama::class, 'id_asrama');
    }

    public function santri()
    {
        return $this->hasMany(Santri::class, 'id_kamar');
    }

    public function getNamaKamarAttribute($value)
    {
        return ucwords(strtolower($value));
    }
}