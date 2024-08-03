<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id'
    ];

    public function jurusans()
    {
        return $this->hasMany(Jurusan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
