<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTP extends Model
{
    use HasFactory;

    protected $fillable = [
        'butir_id',
        'rekomendasi',
        'rencana',
        'jadwal_penyelesaian',
        'pihak_bertangung_jawab',
    ];

    public function butir()
    {
        return $this->belongsTo(Butir::class);
    }
}
