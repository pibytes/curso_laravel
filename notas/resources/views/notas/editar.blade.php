@extends('master')

@section('seccion')
    <h1>Editar nota {{ $nota->id }}</h1>

    <div class="container">
        <form method="POST" action="{{ route('notas.update', $nota->id) }}">{{--mando el id de la nota para editarla--}}
            @method('PUT') {{--HTML no permite el PUT, lo paso por adentro--}}
            @csrf

            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
                value="{{$nota->nombre }}" /> 
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"
                value="{{ $nota->descripcion }}" />
            <button class="btn btn-warning btn-block" type="submit">Editar</button>
        </form>
    </div>

    {{--Errores--}}
    @error('nombre') 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            El nombre es obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @enderror

    @error('descripcion')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            La descripcion es obligatoria
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @enderror

    {{--Exito--}}
    @if (session('mensaje_exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('mensaje_exito')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection