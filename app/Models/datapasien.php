<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapasien extends Model
{
    protected $table = "datapasien";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nik_kk', 'nama_kepala', 'nama_pasien', 'kode_kk', 'nik', 'no_rm', 'no_kartu',
        'alamat', 'hubungan', 'tgl_lahir', 'jenis_kelamin', 'agama'
    ];

    public function pendaftaran()
    {
        return $this->hasMany(datapendaftaran::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model::where('id', '>', $model->id)->decrement('id');
        });
    }
}