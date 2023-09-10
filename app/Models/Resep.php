<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'resep_obat';
    protected $guarded = [];

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class,'kode_obat','kode');
    }
}
