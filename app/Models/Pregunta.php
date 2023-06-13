<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $table = "preguntas";
    public $timestamps = false;

    protected $fillable = [
        'pregunta',
        'orden',
        'fecha_creacion',
    ];

    public function opciones()
    {
        return $this->hasMany(PreguntaOpcion::class, "pregunta_id");
    }
}
