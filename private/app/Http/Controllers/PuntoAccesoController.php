<?php

namespace App\Http\Controllers;

use App\PuntoAcceso;
use App\Conexion;
use Illuminate\Http\Request;
use Auth;
use App\User;

class PuntoAccesoController extends Controller
{

    public function index()
    {
        $users = User::all()->count();
        $puntoacceso = PuntoAcceso::paginate(5);
        $conexiones = Conexion::all()->count();
        
        $n_puntos = PuntoAcceso::all()->count();
        if(Auth::check()){
            $current_user = Auth::id();
            return view('puntoacceso.index')->with(['puntoacceso' => $puntoacceso, 'users' => $users, 'n_puntos' => $n_puntos, 
            'current_user' => $current_user, 'conexiones' => $conexiones]);
        } else {
            return view('puntoacceso.index')->with(['puntoacceso' => $puntoacceso, 'users' => $users, 'n_puntos' => $n_puntos, 'conexiones' => $conexiones]);
        }

    }


    public function create()
    {
        return view('puntoacceso.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['iduser'] = Auth::id();
        
        PuntoAcceso::create($input);
        
        return redirect()->route('puntoacceso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuntoAcceso  $puntoAcceso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puntoacceso = PuntoAcceso::findOrFail($id);
        return view('puntoacceso.detail', ['puntoacceso' => $puntoacceso]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PuntoAcceso  $puntoAcceso
     * @return \Illuminate\Http\Response
     */
    public function edit(PuntoAcceso $puntoAcceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PuntoAcceso  $puntoAcceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuntoAcceso $puntoAcceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuntoAcceso  $puntoAcceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuntoAcceso $puntoAcceso)
    {
        //
    }
}
