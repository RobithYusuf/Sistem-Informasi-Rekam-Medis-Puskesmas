<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapetugas extends Model
{

    public $incrementing = false;

    protected $table = "datapetugas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'telp', 'tgl_lahir', 'alamat'
    ];


    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model::where('id', '>', $model->id)->decrement('id');
        });
    }
}