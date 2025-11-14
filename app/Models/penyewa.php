<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    protected $table = 'penyewas';

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
    ];

    public function mobils()
    {
        return $this->hasMany(Mobil::class, 'penyewa_id');
    }
}
