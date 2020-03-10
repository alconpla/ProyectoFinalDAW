@extends('layouts.app')

@section('content')

<div class="container ypt">
    <div class="row">
        <div class="col-md-12">
           <div class="card mb-3">
                  <div class="card-body">
                        <h2 class="card-title">{{ $puntoacceso->modelo }}</h2>
						<p class="card-text">Ubicación: {{ $puntoacceso->ubicacion }}</p>
						<p class="card-text">Latitud: {{ $puntoacceso->latitud }}</p>
						<p class="card-text">Longitud: {{ $puntoacceso->longitud }}</p>
						<p class="card-text">Fecha de alta: {{ $puntoacceso->fechaalta }}</p>
                  </div>
            </div>
            <a class="btn btn-secondary" href="{{ route('puntoacceso.index') }}">Volver</a>
        </div>
    </div>
</div>

@stop