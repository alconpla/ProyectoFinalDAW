@extends('layouts.app')

@section('content')

<style type="text/css">
    .table td, .table th{
        vertical-align: middle;
        text-align:center;
        padding: .55rem;
    }
    
    .btn {
        margin-right: 10px;
    }
    
    .table thead th {
        text-align:center;
    }
</style>

<div class="container ypt">
    <div class="row">
        <div class="col-md-12">

			<div class="d-flex justify-content-between">
			    <h2>Periodos activos</h2>
			       <div>
			           <!--<a href="{{ route('activo.create') }}" class="btn btn-success btn-sm">Crear activo</a>-->
			       </div>
			</div>
			
            <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Fecha Inicial</th>
                  <th scope="col">Fecha Final</th>
                  <th scope="col">Hora Inicial</th>
                  <th scope="col">Hora Final</th>
                  <th scope="col">Periodo Mínimo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($activos as $activo)
                <tr>
                  <th scope="row">{{ $activo->id }}</th>
                  <td>{{ $activo->fechainicial }}</td>
                  <td>{{ $activo->fechafinal }}</td>
                  <td>{{ $activo->horainicial }}</td>
                  <td>{{ $activo->horafinal }}</td>
                  <td>{{ $activo->periodominimo }}</td>
                </tr>
                @endforeach

                </tbody>
            </table>
            <div class="">
                <a class="btn btn-secondary" href="{{ route('puntoacceso.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>

@stop