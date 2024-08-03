<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Butir extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'indikator_id',
        'kode',
        'area_id',
    ];
    
    protected $casts = [
        'area_id' => 'array'
    ];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class);
    }

    public function area()
    {
        return $this->belongsToMany(Area::class, 'butir_area', 'butir_id', 'area_id');
    }
}
