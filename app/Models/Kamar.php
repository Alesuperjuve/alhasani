<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';

    public function asrama()
    {
        return $this->belongsTo(Asrama::class, 'id_asrama', 'id_asrama');
    }
}