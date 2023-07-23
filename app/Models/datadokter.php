<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadokter extends Model
{
    public $incrementing = false;

    protected $table = "datadokter";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama','datapoli_id','user_id', 'telp', 'tgl_lahir', 'alamat', 
    ];

    public function Datapoli()
    {
        return $this->belongsTo(datapoli::class, "datapoli_id");
    }

    public function User()
    {
        return $this->belongsTo(user::class);
    }


    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model::where('id', '>', $model->id)->decrement('id');
        });
    }

    
}