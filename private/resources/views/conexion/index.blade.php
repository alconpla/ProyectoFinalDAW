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
			    <h2>Conexiones</h2>
			       <div>
			           <!--<a href="{{ route('conexion.create') }}" class="btn btn-success btn-sm">Crear conexion</a>-->
			       </div>
			</div>
			
            <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Punto de acceso</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Hora</th>
                  <th scope="col">Mac</th>
                </tr>
                </thead>
                <tbody>
                @foreach($conexiones as $conexion)
                <tr>
                  <th scope="row">{{ $conexion->id }}</th>
                  <td>{{ $conexion->puntoacceso->modelo }}</td>
                  <td>{{ $conexion->fecha }}</td>
                  <td>{{ $conexion->hora }}</td>
                  <td>{{ $conexion->mac }}</td>
                </tr>
                @endforeach
                
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $conexiones->links() }}
            </div>
            <div class="">
                <a class="btn btn-secondary" href="{{ route('puntoacceso.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>

@stop