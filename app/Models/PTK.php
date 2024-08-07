<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTK extends Model
{
    use HasFactory;

    protected $fillable = [
        'butir_id',
        'rekomendasi',
        'rencana',
        'jadwal_penyelesaian',
        'mekanisme_monitoring',
        'pihak_bertangung_jawab',
    ];
    public function butir()
    {
        return $this->belongsTo(Butir::class);
    }

}
