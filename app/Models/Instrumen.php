<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'standar_id',
        'area_id',
        'role_id',
        'tipe',
        'periode',
        'user_id',
        'ketua_id',
        'kode_dokumen',
    ];

    protected $casts = [
        'area_id' => 'array',
        'role_id' => 'array',
        'user_id' => 'array',
    ];

    public function standar()
    {
        return $this->belongsTo(Standar::class);
    }

    public function indikator()
    {
        return $this->hasMany(Indikator::class);
    }


    public function ketua()
    {
        return $this->belongsTo(User::class, 'ketua_id');
    }
    

    public function area()
    {
        return $this->belongsToMany(Area::class, 'instrumen_area', 'instrumen_id', 'area_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'instrumen_user', 'instrumen_id', 'user_id');
    }

    public function role()
    {
        return $this->belongsToMany(Role::class, 'instrumen_role', 'instrumen_id', 'role_id');
    }
}
