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
                'pregunta' => 'Manejo adecuado de los ecosistemas boscosos',
                'orden' => '1',
            ],
            [
                'pregunta' => 'Diversificación de cultivos',
                'orden' => '2',
            ],
            [
                'pregunta' => 'Producción orgánica',
                'orden' => '3',
            ],
            [
                'pregunta' => 'Uso de tecnología limpia',
                'orden' => '4',
            ],
            [
                'pregunta' => 'Manejo de desechos sólidos',
                'orden' => '5',
            ],
            [
                'pregunta' => 'Manejo de desechos líquidos',
                'orden' => '6',
            ],
            [
                'pregunta' => 'Manejo ecológico de plagas',
                'orden' => '7',
            ],
            [
                'pregunta' => 'Prácticas de conservación y uso sostenible de la biodiversidad',
                'orden' => '8',
            ],
            [
                'pregunta' => 'Manejo eficiente del agua',
                'orden' => '9',
            ],
            [
                'pregunta' => 'Conservación del suelo',
                'orden' => '10',
            ],
            [
                'pregunta' => 'Manejo de insumos',
                'orden' => '11',
            ],
            [
                'pregunta' => 'Actividad liderada por la mujer',
                'orden' => '12',
            ],
            [
                'pregunta' => 'Visibilidad de la mujer en las acciones de protección ambiental',
                'orden' => '13',
            ],
            [
                'pregunta' => 'Empoderamiento de la mujer',
                'orden' => '14',
            ],
            [
                'pregunta' => 'El emprendimiento tiene impacto en otras mujeres de manera directa o indirecta.',
                'orden' => '15',
            ],
            [
                'pregunta' => 'Emprendimiento verde',
                'orden' => '16',
            ],
            [
                'pregunta' => 'Eficiencia energética',
                'orden' => '17',
            ],
            [
                'pregunta' => 'Manejo de desechos sólidos',
                'orden' => '18',
            ],
            [
                'pregunta' => 'Manejo de desechos líquidos',
                'orden' => '19',
            ],
            [
                'pregunta' => 'Manejo eficiente del agua',
                'orden' => '20',
            ],
            [
                'pregunta' => 'Actividad liderada por la mujer',
                'orden' => '21',
            ],
            [
                'pregunta' => 'Visibilidad y valoración de las actividades ambientales de la mujer',
                'orden' => '22',
            ],
            [
                'pregunta' => 'Empoderamiento de la mujer',
                'orden' => '23',
            ],
            [
                'pregunta' => 'El emprendimiento tiene impacto en otras mujeres de manera directa o indirecta.',
                'orden' => '24',
            ],
            
            
        ];

        // eliminar existentes
        DB::table("preguntas")->delete();
        // set Organismos
        DB::table("preguntas")->insert($insertPreguntas);

        $insertPreguntasOpciones = [
            [
                'pregunta_id' => '1',
                'opcion' => 'Conservación del ecosistema (≥ 50% de bosque en protección)',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '1',
                'opcion' => 'No realiza manejo adecuado del ecosistema boscoso',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '2',
                'opcion' => 'Más de un cultivo en la chacra',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '2',
                'opcion' => 'Monocultivo ',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '3',
                'opcion' => 'Uso de abono orgánico/ Manejo integrado de plagas/BPA ',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '3',
                'opcion' => 'Producción convencional',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '4',
                'opcion' => 'Uso de paneles solares/instalación de biodigestores/uso de paneles fotovoltaicos/ uso de bombas solares, etc',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '4',
                'opcion' => 'Uso de combustible gasolina, petróleo',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '5',
                'opcion' => 'Elaboración de compost/reduce, reutiliza y/o recicla los desechos en lugares adecuados/ realizan una separación adecuada de los desechos (orgánicos, inorgánicos, peligrosos) / limpieza de malezas de forma manual, con el uso de cuchillos y maquinas capeadoras',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '5',
                'opcion' => 'Inadecuado manejo y disposición de los desechos/ botaderos a cielo abierto/quema de basura o malezas',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '6',
                'opcion' => 'Manejo adecuado de las aguas limpias y residuales, teniendo una correcta disposición ya sea en tanque séptico u otra forma que no contamine el ambiente.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '6',
                'opcion' => 'Agua utilizada en procesos de cultivo, crianza de animal no se trata antes de regresar a loscuerpos de agua o al suelo.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '7',
                'opcion' => 'Medidas de control directo de plagas con insecticidas biológicos específicos/ uso de controladores biológicos/ insumos autorizados en la producción ecológica.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '7',
                'opcion' => 'Control de plagas con insecticidas no biológicas o insumos no autorizados para la producción
                ecológica',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '8',
                'opcion' => 'Cercos vivos/mantener la cobertura del suelo/utilizar la sombra natural/rotar los cultivos/reforestar con árboles nativos/realizar plantaciones de árboles y arbustos en los bordes de los campos/uso de árboles en asociación con cultivos de ciclo corto o perennes/uso de abonos orgánicos',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '8',
                'opcion' => 'No realiza ninguna de las prácticas de conservación',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '9',
                'opcion' => 'Riego por goteo/elimina fuga de agua/ no vierte sustancias contaminantes al agua/reforestación para proteger las fuentes de agua/aprovechamiento de agua de lluvia',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '9',
                'opcion' => 'No realiza ninguna de las prácticas de manejo de agua',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '10',
                'opcion' => 'Adecuada canalización de las escorrentías/no uso de químicos en el suelo/cobertura para evitar la erosión del suelo',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '10',
                'opcion' => 'No realiza ninguna de las prácticas de conservación del suelo',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '11',
                'opcion' => 'Almacenamiento adecuado de combustibles, plaguicidas, químicos u otros para evitar la contaminación del suelo, agua o aire/almacenar a una distancia mínima de 20 metros de los cuerpos de agua, en recipientes herméticos resistentes/contar con una base impermeable (plástico grueso o recipiente) para contener los derrames o goteos durante la carga, y un material absorbente (aserrín o arena) para recoger los derrames del suelo.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '11',
                'opcion' => 'No realiza ninguna de las prácticas de manejo de insumos',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '12',
                'opcion' => 'Actividad liderada por la mujer',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '12',
                'opcion' => 'Actividad no lidera por la mujer',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '13',
                'opcion' => 'Participa en las jornadas o campañas ambientales (puede ser organizada por la misma organización de mujeres, COOPAC, Municipalidad o aliados)',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '13',
                'opcion' => 'No participa en ninguna jornada o campaña ambiental',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '14',
                'opcion' => 'Accede a créditos/ accede a capacitaciones/participa en espacios de decisión',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '14',
                'opcion' => 'No participa en ninguna de las actividades',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '15',
                'opcion' => 'Brinda trabajo a otras mujeres/ realiza acciones conjuntas con otras mujeres de su comunidad/ se asocia con otros emprendimientos de su comunidad.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '15',
                'opcion' => 'Realiza sus actividades de manera aislada',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '16',
                'opcion' => 'Reduce el uso de plástico en la producción y comercialización/ actividades que permitan rediseñar, reducir, reutilizar, reparar, renovar, recuperar y reciclar materiales y productos existentes para crear valor añadido ',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '16',
                'opcion' => 'Producción convencional',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '17',
                'opcion' => 'Uso de equipos a más eficientes (ejemplo focos led, refrigeradora con consumo de energía A+ hasta A+++)/reduce el consumo de energía (disminución de la facturación mensual de luz) /uso de paneles solares',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '17',
                'opcion' => 'No realiza un manejo eficiente de la energía eléctrica',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '18',
                'opcion' => 'Elaboración de compost/reduce, reutiliza y/o recicla los desechos en lugares adecuados/ realizan una separación adecuada de los desechos (orgánicos, inorgánicos, peligrosos)',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '18',
                'opcion' => 'Inadecuado manejo y disposición de los desechos/ botaderos a cielo abierto/quema de basura ',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '19',
                'opcion' => 'Manejo adecuado de las aguas limpias y residuales, teniendo una correcta disposición ya sea en tanque séptico u otra forma que no contamine el ambiente.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '19',
                'opcion' => 'Agua utilizada en procesos de producción, comercialización, no se trata antes de regresar a los cuerpos de agua o al
                suelo.',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '20',
                'opcion' => 'Elimina fuga de agua/no vierte sustancias contaminantes al agua/ aprovechamiento de agua de lluvia',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '20',
                'opcion' => 'No realiza ninguna de las prácticas de manejo de agua ',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '21',
                'opcion' => 'Actividad liderada por la mujer',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '21',
                'opcion' => 'Actividad no lidera por la mujer',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '22',
                'opcion' => 'Participa en las jornadas o campañas ambientales (puede ser organizada por la misma organización de mujeres, COOPAC, Municipalidad o aliados)',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '22',
                'opcion' => 'No participa en ninguna jornada o campaña ambiental',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '23',
                'opcion' => 'Accede a créditos/ accede a capacitaciones/participa en espacios de decisión ',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '23',
                'opcion' => 'No participa en ninguna de las actividades',
                'orden' => '2',
                'valor' => 0,
            ],
            
            [
                'pregunta_id' => '24',
                'opcion' => 'Brinda trabajo a otras mujeres/ realiza acciones conjuntas con otras mujeres de su comunidad/ se asocia con otros emprendimientos de su comunidad.',
                'orden' => '1',
                'valor' => 1,
            ],
            [
                'pregunta_id' => '24',
                'opcion' => 'Realiza sus actividades de manera aislada',
                'orden' => '2',
                'valor' => 0,
            ],
            
        ];

        // eliminar existentes
        DB::table("preguntas_opciones")->delete();
        // set Organismos
        DB::table("preguntas_opciones")->insert($insertPreguntasOpciones);
    }
}
