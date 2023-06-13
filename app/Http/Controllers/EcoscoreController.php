<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Pregunta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EcoscoreController extends Controller
{
    public function index(){

        // $persona = null;
        // if (Session::has('persona')) {
        //     $persona = Session::get('persona');
        // }

        // return view('ecoscore.index',['persona'=>$persona]);
            $end = Pregunta::max('orden');
            $questions = Pregunta::all();
            // dd($questions[0]->opciones);

            $data = $questions->transform(function($q){
                $data = [];
                $data['id'] = $q->id; 
                $data['pregunta'] = $q->pregunta; 
                $data['orden'] = $q->orden; 
                $data['opciones'] = $q->opciones->transform(function($o){
                    $op = [];
                    $op['id'] = $o->id;
                    $op['opcion'] = $o->opcion;
                    $op['orden'] = $o->orden;
                    $op['valor'] = $o->valor;
                    return $op;
                })->values()->toArray();
                return $data;
            })->values()->toArray();

        return view('ecoscore.index',['questions'=>$data , 'end'=>$end]);



        // return view('ecoscore.index');
    }

    public function continue(Request $request){
        // dd($request->all());
        $data = $request->all();
        $name= $data['name'];

        $slug = Str::slug($name);
        $alias = $slug;
        $counter = 1;

        while (Persona::where('alias', $alias)->exists()) {
            $alias = $slug . '-' . $counter++;
        }

        DB::beginTransaction();

        $persona = Persona::create([
            'nombre' => $name,
            'alias' => $alias
        ]);

        DB::commit();

        // Session::put('persona', $persona);
        
        return response()->json([
            'resp'=>'ok',
            'vista'=>'continue'
        ]);
    }

    
    public function finish(Request $request){
        $data = $request->all(); 
        $name = $data['params']['name'];
        $puntuacion = $data['puntuacion'];
        // dd($name, $puntuacion);

        $slug = Str::slug($name);
        $alias = $slug;
        $counter = 1;

        while (Persona::where('alias', $alias)->exists()) {
            $alias = $slug . '-' . $counter++;
        }

        DB::beginTransaction();

        $persona = Persona::create([
            'nombre' => $name,
            'alias' => $alias,
            'puntuacion' => $puntuacion,
        ]);

        DB::commit();

        // // Session::put('persona', $persona);
        
        return response()->json([
            'resp'=>'ok',
        ]);

        // dd($request->all());
    }
}
