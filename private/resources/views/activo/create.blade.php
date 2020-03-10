@extends('layouts.app')

@section('content')

<div class="container ypt">
    <div class="row">
        <div class="col-md-5">
            <h2>Crear periodo activo</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <form method="post" class="form" action="{{url('activo')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col">
                        <label for="titulo">Fecha inicial</label>
                        <input type="date" name="fechainicial" class="form-control" id="fechainicial">
                    </div>
                    <div class="col">
                        <label for="titulo">Fecha final</label>
                        <input type="date" name="fechafinal" class="form-control" id="fechafinal">
                    </div>
                </div>
                
                <div class="form-row mt-3">
                    <div class="col">
                        <label for="titulo">Hora inicial</label>
                        <input type="time" name="horainicial" class="form-control" id="horainicial">
                    </div>
                    
                    <div class="col">
                        <label for="titulo">Hora final</label>
                        <input type="time" name="horafinal" class="form-control" id="horafinal">
                    </div>
                </div>
                
                <div class="form-row mt-3">
                    <div class="form-group">
                        <label for="titulo">Periodo mínimo</label>
                        <input type="number" name="periodominimo" class="form-control" id="periodominimo">
                    </div>
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