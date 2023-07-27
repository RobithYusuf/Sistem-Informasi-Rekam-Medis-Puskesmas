<?php

namespace App\Models;

use App\Models\user;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class datapetugas extends Model
{

    public $incrementing = false;

    protected $table = "datapetugas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'user_id', 'nama', 'telp', 'tgl_lahir', 'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model::where('id', '>', $model->id)->decrement('id');
        });
    }
}
