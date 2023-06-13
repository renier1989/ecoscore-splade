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
                'pregunta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, vitae?',
                'orden' => '1',
            ],
            [
                'pregunta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis?',
                'orden' => '2',
            ],
            [
                'pregunta' => 'Lorem ipsum dolor sit amet consectetur adipisicing?',
                'orden' => '3',
            ],
            [
                'pregunta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis asperiores possimus distinctio consequuntur unde voluptas magni beatae voluptatibus praesentium corporis?',
                'orden' => '4',
            ],
            
        ];

        // eliminar existentes
        DB::table("preguntas")->delete();
        // set Organismos
        DB::table("preguntas")->insert($insertPreguntas);

        $insertPreguntasOpciones = [
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quia!',
                'orden' => '1',
                'valor' => 10,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum, dolor sit amet consectetur adipisicing.',
                'orden' => '2',
                'valor' => 5,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illum nisi hic iste dolor ipsam.',
                'orden' => '3',
                'valor' => 9,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quia!',
                'orden' => '4',
                'valor' => 10,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum, dolor sit amet consectetur adipisicing.',
                'orden' => '5',
                'valor' => 5,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illum nisi hic iste dolor ipsam.',
                'orden' => '6',
                'valor' => 9,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quia!',
                'orden' => '7',
                'valor' => 10,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum, dolor sit amet consectetur adipisicing.',
                'orden' => '8',
                'valor' => 5,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illum nisi hic iste dolor ipsam.',
                'orden' => '9',
                'valor' => 9,
            ],
            [
                'pregunta_id' => '2',
                'opcion' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, iusto repudiandae?',
                'orden' => '1',
                'valor' => 20,
            ],
            [
                'pregunta_id' => '2',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis consectetur alias nostrum.',
                'orden' => '2',
                'valor' => 15,
            ],
            [
                'pregunta_id' => '2',
                'opcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, aut debitis.',
                'orden' => '3',
                'valor' => 19,
            ],
            [
                'pregunta_id' => '2',
                'opcion' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore?',
                'orden' => '4',
                'valor' => 19,
            ],
            [
                'pregunta_id' => '3',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'orden' => '1',
                'valor' => 21,
            ],
            [
                'pregunta_id' => '3',
                'opcion' => 'Lorem ipsum dolor sit amet.',
                'orden' => '2',
                'valor' => 13,
            ],
            [
                'pregunta_id' => '3',
                'opcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore.',
                'orden' => '3',
                'valor' => 5,
            ],
            [
                'pregunta_id' => '3',
                'opcion' => 'Lorem ipsum dolor sit.',
                'orden' => '4',
                'valor' => 2,
            ],
            [
                'pregunta_id' => '4',
                'opcion' => 'Lorem ipsum dolor sit.hdolor sit.h dolor sit.h',
                'orden' => '1',
                'valor' => 9,
            ],
            [
                'pregunta_id' => '4',
                'opcion' => 'Lorem ipsum dolor sit.hdolor sit.h dolor sit.h',
                'orden' => '2',
                'valor' => 20,
            ],
            [
                'pregunta_id' => '4',
                'opcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum reprehenderit optio dolorum quos amet enim consequuntur doloribus alias?',
                'orden' => '3',
                'valor' => 20,
            ],
        ];

        // eliminar existentes
        DB::table("preguntas_opciones")->delete();
        // set Organismos
        DB::table("preguntas_opciones")->insert($insertPreguntasOpciones);
    }
}
