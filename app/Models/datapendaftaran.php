<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class datapendaftaran extends Model
{
    public $incrementing = false;

    protected $table = "datapendaftaran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pelayanan', 'pasien_id', 'datapoli_id', 'riwayat_alergi', 'no_registrasi', 'status', 'no_bpjs'
    ];

    public function pasien()
    {
        return $this->belongsTo(datapasien::class);
    }

    public function poliklinik()
    {
        return $this->belongsTo(datapoli::class, "datapoli_id");
    }

    public function Pemeriksaan()
    {
        return $this->hasOne(pemeriksaan::class);
    }
    

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model::where('id', '>', $model->id)->decrement('id');
        });
    }
}