@extends('master')

@section('seccion')

    <h1 class="display-4">Notas</h1>
    <div>
        <form method="POST" action="{{ route('notas.crear') }}">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
                value="{{old('nombre')}}" /> 
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"
                value="{{old('descripcion')}}" />
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
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

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($notas as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>
                    <a href="{{ route('notas.detalle', $item)}}"> {{--va a leer el id--}}
                        {{ $item->nombre }}
                    </a>
                </td>
                <td>{{ $item->descripcion }}</td>
                <td>
                    <a href="{{ route('notas.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                
                    <form action="{{ route('notas.eliminar', $item) }}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form> 
                {{--para que el formulario no haga bloque--}}
                </td>
                </tr>
            @endforeach
          </tr>
        </tbody>
      </table>
      {{ $notas->links() }} {{--hace las paginas automaticamente--}}
@endsection