<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
{
    use HasFactory;
    use Uuids;

    protected $table = "personas";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'alias',
        'puntuacion',
        'fecha_cracion',
    ];

    protected static function booted()
    {
        parent::boot();
    
        static::creating(function ($model) {
            $model->fecha_creacion = now();
        });
    }
}
