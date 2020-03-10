@extends('layouts.app')

@section('content')

<div class="container ypt">
    <div class="row">
        <div class="col-md-5">
            <h2>Crear punto de acceso</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <form method="post" class="form" action="{{url('puntoacceso')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="titulo">Modelo</label>
                    <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Modelo">
                </div>
                <div class="form-group">
                    <label for="video">Ubicacion</label>
                    <input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="Ubicacion">
                </div>
                <div class="form-group">
                    <label for="video">Latitud</label>
                    <input type="text" name="latitud" class="form-control" id="latitud" placeholder="Latitud">
                </div>
                <div class="form-group">
                    <label for="video">Longitud</label>
                    <input type="text" name="longitud" class="form-control" id="longitud" placeholder="Longitud">
                </div>
                <div class="form-group">
                    <label for="video">Fecha de alta</label>
                    <input type="date" name="fechaalta" class="form-control" id="fechaalta" placeholder="Fecha de alta">
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