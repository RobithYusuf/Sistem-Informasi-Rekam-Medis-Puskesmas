<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeriksaan extends Model
{
    protected $table = "pemeriksaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','pendaftaran_id', 'hasil_pemeriksaan', 'diagnosis', 'status', 'tgl_pemeriksaan'
    ];

    public function Pendaftaran()
    {
        return $this->belongsTo(datapendaftaran::class, "pendaftaran_id");
    }
    
}