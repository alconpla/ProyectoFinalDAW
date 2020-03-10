<?php

namespace App\Http\Controllers;

use App\Conexion;
use App\PuntoAcceso;
use Illuminate\Http\Request;

class ConexionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conexiones = Conexion::paginate(8);
        return view('conexion.index')->with(['conexiones' => $conexiones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puntoacceso = PuntoAcceso::all();
        return view('puntoacceso.index', ['puntoacceso' => $puntoacceso]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Conexion::create($input);
        
        return redirect()->route('puntoacceso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function show(Conexion $conexion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function edit(Conexion $conexion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conexion $conexion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conexion $conexion)
    {
        //
    }
}
