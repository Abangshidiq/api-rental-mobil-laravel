<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\penyewa;

class mobil extends Model
{
    protected $table = 'mobils';

    protected $fillable = [
        'merk',
        'type',
        'warna',
        'no_polisi',
        'penyewa_id',
    ];

    public function penyewa()
    {
        return $this->belongsTo(penyewa::class, 'penyewa_id');
    }
}
