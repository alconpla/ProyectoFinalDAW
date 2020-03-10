<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Activo;
use App\Conexion;
use Carbon\Carbon;

class APIController extends Controller
{
    public function store(Request $request){
        
        // file_put_contents('prueba.txt', $request->getContent()."\n", FILE_APPEND | LOCK_EX);

        //Mapeamos atributos de request
        $puntoacceso = $request->input('idpuntoacceso');
        $fecha = Carbon::parse($request->input('fecha'));
        $hora  = Carbon::parse($request->input('hora'));
        $mac = $request->input('mac');
        
        //Respuesta por defecto (se mandará tal cual en el caso de que no llegue a insertarse en la DB)
        $response = response()->json([
                        'ESTADO' => 'No se ha registrado en BBDD'
                    ]);
        
        //Sacamos de la base de datos el periodo al que debería corresponder la fecha de la conexión
        $periodo = \DB::table('activo')->where([ //Mismo día inicio
                ['fechainicial', '=', $fecha],
                ['horainicial', '<=', $hora]
            ])->orWhere([
                ['fechafinal', '=', $fecha], //Mismo día final
                ['horafinal', '>=', $hora]
            ])->orWhere([
                ['fechainicial', '<', $fecha], //Entre día inicio y día final
                ['fechafinal', '>', $fecha]
            ])->first();
            
        //Si hay un periodo activo, pasamos a comprobar que la conexión cumpla los requisitos
        if ($periodo != null) {
            $dt_inicial = Carbon::createFromFormat('Y-m-d H:i', $periodo->fechainicial.' '.$periodo->horainicial);
            $dt_final = Carbon::createFromFormat('Y-m-d H:i', $periodo->fechafinal.' '.$periodo->horafinal);
            $dt_conexion = Carbon::createFromFormat('Y-m-d H:i', $request->input('fecha').' '.$request->input('hora'));
            
            if ($dt_inicial->lt($dt_conexion) && $dt_conexion->lt($dt_final)){
                //Buscamos si hay conex. antigua en la DB para comprobar el atributo periodominimo
                $antigua_conexion = \DB::table('conexion')->where('mac', '=', $mac)->orderBy('fecha', 'desc')->first();
                
                //Booleano que nos permite saber si podemos guardar el registro en la DB
                $permitir_guardar = false;
                
                if ($antigua_conexion != null) {
                    $dt_antigua_conexion = Carbon::createFromFormat('Y-m-d H:i:s', $antigua_conexion->fecha.' '.$antigua_conexion->hora);
                    
                    //Ha transcurrido el periodo mínimo desde que se registró la última conexión
                    if (($dt_antigua_conexion->addHours($periodo->periodominimo))->lt($dt_conexion)){
                        $permitir_guardar = true;
                    }
                } else {
                    //Es la primera conexión de esta MAC, no hay que comprobar nada
                    $permitir_guardar = true;
                }
                
                if ($permitir_guardar) {
                    //Construimos objeto y guardamos en la DB
                    $conexion = new Conexion(['idpuntoacceso' => $puntoacceso,
                                              'fecha'         => $fecha->format('Y-m-d'),
                                              'hora'          => $hora->format('H:i:s'),
                                              'mac'           => $mac
                                            ]);
                    $conexion->save();
                    
                    //Devolvemos JSON
                    $response = response()->json([
                        'ESTADO' => 'Registrado en BBDD',
                        'idpuntoacceso' => $puntoacceso,
                        'fecha' => $fecha,
                        'hora' => $hora,
                        'mac' => $mac,
                    ]);
                }
            }
        }
        
        return $response;
    }
}
