<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
    use HasFactory;

    protected $table = 'asrama';
    protected $primaryKey = 'id_asrama';

    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'id_asrama', 'id_asrama');
    }
}
