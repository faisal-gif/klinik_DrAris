<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $guarded = [];

    public function berobat(): HasMany
    {
        return $this->hasMany(Berobat::class,'id_pasien','nik')->latest();
    }
}

