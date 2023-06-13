<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insertPreguntas = [
            [
                'pregunta' => '¿Qué fuentes de energía doméstica utilizas a diario?',
                'orden' => '1',
            ],
            [
                'pregunta' => '¿Qué medio sueles usar para desplazarte a tu hogar o centro de estudios y/o trabajo?',
                'orden' => '2',
            ],
            [
                'pregunta' => 'Cuando tienes ropa, muebles o juguetes que ya no utilizas pero que están en buen estado, ¿se lo haces llegar a personas que aún lo pueden utilizar?',
                'orden' => '3',
            ],
            [
                'pregunta' => '¿Qué práctica realizas al deshacerte de los residuos de tu hogar?',
                'orden' => '4',
            ],
            [
                'pregunta' => '¿Cómo te encargas de lavar tu ropa?',
                'orden' => '5',
            ],
            [
                'pregunta' => '¿Cuánto tiempo demoras en ducharte cotidianamente? (toma en cuenta sólo el tiempo que dejas correr el agua)',
                'orden' => '6',
            ],
            [
                'pregunta' => 'Cuando debes comprar ropa nueva, ¿qué material prefieres?',
                'orden' => '7',
            ],
            [
                'pregunta' => '¿Cuánta carne de res consumes mensualmente?',
                'orden' => '8',
            ],
            [
                'pregunta' => '¿Cuánta carne de pollo consumes mensualmente?',
                'orden' => '9',
            ],
            [
                'pregunta' => '¿Cuánto arroz consumes mensualmente?',
                'orden' => '10',
            ]
            
        ];

        // eliminar existentes
        DB::table("preguntas")->delete();
        // set Organismos
        DB::table("preguntas")->insert($insertPreguntas);

        $insertPreguntasOpciones = [
            [
                'pregunta_id' => '1',
                'opcion' => 'Utilizo focos led o equipos domésticos (cocina, terma, etc.), con energía solar o a gas natural.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Utilizo focos incandesentes o fluorecentes, o equipos domésticos (cocina, terma, etc.), con energía de leña o carbón.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '2',
                'opcion' => 'Normalmente utilizo una bicicleta o voy a pie.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '2',
                'opcion' => 'Normalmente utilizo el transporte público o tomo un taxi.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '3',
                'opcion' => 'Sí, al menos dos veces al año.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '3',
                'opcion' => 'A veces una vez por año, pero no necesariamente todos los años .',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '4',
                'opcion' => 'Separo los diferentes tipos de residuos en al menos en dos contenedores diferentes (ej. papel, plástico, vidrio y materia orgánica).',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '4',
                'opcion' => 'Centralizo todos los residuos en un solo contenedor de desechos.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '5',
                'opcion' => 'Lavo la ropa a mano siempre que puedo.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '5',
                'opcion' => 'Utilizo la lavadora siempre que puedo.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '6',
                'opcion' => 'Normalmente demoro entre 5 y 10 minutos.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '6',
                'opcion' => 'Normalmente demoro más 10 minutos.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '7',
                'opcion' => 'Prefiero ropa de materiales como lino o algodón orgánico.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '7',
                'opcion' => 'Prefiero ropa de materiales como cuero o jean.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '8',
                'opcion' => 'Consumo MENOS de 250 gramos de carne de res',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '8',
                'opcion' => 'Consumes MÁS de 250 gramos de carne de res',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '9',
                'opcion' => 'Consumo MENOS de 900 gramos de carne de pollo',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '9',
                'opcion' => 'Consumo MÁS de 900 gramos de carne de pollo',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '10',
                'opcion' => 'Consumo MENOS de 1 kilo de arroz.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '10',
                'opcion' => 'Consumo MÁS de 1 kilo de arroz.',
                'orden' => '2',
                'valor' => 0,
            ]
            
        ];

        // eliminar existentes
        DB::table("preguntas_opciones")->delete();
        // set Organismos
        DB::table("preguntas_opciones")->insert($insertPreguntasOpciones);
    }
}
