<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Berobat extends Model
{
    use HasFactory;
    protected $table = 'berobat';
    protected $guarded = [];
    
    public function resep(): HasMany
    {
        return $this->hasMany(Resep::class,'id_berobat','id');
    }
}
