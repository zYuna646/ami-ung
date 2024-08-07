<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'instrumen_id',
    ];

    public function instrumen()
    {
        return $this->belongsTo(Instrumen::class);
    }

    public function butir()
    {
        return $this->hasMany(Butir::class);
    }
}
