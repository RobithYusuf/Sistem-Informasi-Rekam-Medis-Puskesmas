<?php

namespace App\Models;

use App\Models\rekammedis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pemeriksaan extends Model
{
    protected $table = "pemeriksaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pendaftaran_id', 'hasil_pemeriksaan', 'diagnosis', 'status', 'tgl_pemeriksaan'
    ];

    public function Pendaftaran()
    {
        return $this->belongsTo(datapendaftaran::class, "pendaftaran_id");
    }

    public function rekammedis()
    {

        return $this->hasMany(rekammedis::class);
    }
}
