@extends('layouts.app')

@section('content')

<div class="container ypt">
    <div class="row">
        <div class="col-md-5">
            <h2>Crear conexion</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <form method="post" class="form" action="{{url('conexion')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select name="idpuntoacceso" class="form-control" name="idpuntoacceso">
                        @foreach ($puntoacceso as $p)
                            <option value="{{ $p->id }}">{{ $p->id . '. ' . $p->modelo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha">
                </div>
                <div class="form-group">
                    <input type="text" name="mac" class="form-control" id="latitud" placeholder="Mac">
                </div>
                <div class="form-group">
                    <input type="time" name="hora" class="form-control" id="hora" placeholder="Hora">
                </div>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('puntoacceso.index') }}">Volver</a>
                    <input class="btn btn-primary" type="submit" value="Crear">
                </div>
            </form>
            
        </div>
    </div>
</div>

@stop