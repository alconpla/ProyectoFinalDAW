@extends('layouts.app')
@section("content")

<div class="container ypt">
    <div class="row">
        <div class="col-md-5">
           <h2>Editar usuario</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('usuario/' . $user->id) }}" method="post" class="form" id="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="{{ old('name', $user->name) }}" name="name" class="form-control" placeholder="Name"/>
                </div>
                <div class="form-group">
                    <label>Tipo</label>
                    <select name="tipo" class="form-control" value="{{ $user->tipo }}">
                        <option value="{{ $user->tipo }}">{{ $user->tipo }}</option>
                        @if ($user->type != 'admin')
                            <option value="admin">admin</option>
                        @endif
                        @if ($user->type != 'tecnico')
                            <option value="tecnico">tecnico</option>
                        @endif
                        @if ($user->type != 'visitante')
                            <option value="visitante">visitante</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('usuario.index') }}">Volver</a>
                    <input type="submit" value="Editar" id="form-button" class="btn btn-primary">
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection