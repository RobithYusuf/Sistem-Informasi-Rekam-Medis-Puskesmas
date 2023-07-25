<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekammedis extends Model
{
    use HasFactory;

    protected $table = "rekam_medis";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function pemeriksaan()
    {
        return $this->belongsTo(pemeriksaan::class, "pemeriksaan_id");
    }
}
