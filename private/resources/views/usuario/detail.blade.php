@extends('layouts.app')

@section('content')

<div class="container ypt">
    <div class="row">
        <div class="col-md-12">
           <div class="card mb-3">
                  <div class="card-body">
                        <h2 class="card-title">{{ $user->name }}</h2>
						<p class="card-text">Email: {{ $user->email }}</p>
						<p class="card-text">{{ $user->tipo }}</p>
                  </div>
            </div>
            <a class="btn btn-secondary" href="{{ route('puntoacceso.index') }}">Volver</a>
        </div>
    </div>
</div>

@stop