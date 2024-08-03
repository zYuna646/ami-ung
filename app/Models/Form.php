<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'ketersediaan_dokumen',
        'catatan',
        'kualitatif',
        'jumlah',
        'keberadaan',
        'kesesuaian_standar',
        'deskripsi_hasil_audit',
        'faktor_pendukung',
        'temuan_audit',
        'faktor_penghambat',
    ];
    
    public function ptp ()
    {
        return $this->hasMany(PTP::class);
    }

    public function ptk ()
    {
        return $this->hasMany(PTK::class);
    }
}
