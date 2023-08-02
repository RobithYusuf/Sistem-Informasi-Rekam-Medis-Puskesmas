<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapoli extends Model
{
    public $incrementing = true;

    protected $table = "datapoli";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_poli', 'ruangan'
    ];

    public function Datadokter()
    {
        return $this->hasMany(datadokter::class, "datapoli_id");
    }
    public function datapendaftaran()
    {
        return $this->hasMany(datapendaftaran::class, "datapoli_id");
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model::where('id', '>', $model->id)->decrement('id');
        });
    }
}
