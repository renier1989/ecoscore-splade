<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaOpcion extends Model
{
    use HasFactory;
    protected $table = "preguntas_opciones";
    public $timestamps = false;

    protected $fillable = [
        'pregunta_id',
        'opcion',
        'valor',
        'correcta',
        'orden',
        'fecha_creacion',
    ];
}
