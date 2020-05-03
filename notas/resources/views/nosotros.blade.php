@extends('master')

@section('seccion')

    <h1  class='display-4'> Equipo </h1>
    
    @foreach ($equipo as $item) 
        <a href="{{ route('nosotros', $item)}}" class="h4 text-danger "> {{$item}} </a> {{--//me hace el /nombre--}}
        <br>
    @endforeach

    @if (!empty($nombre)) {{--si no es vacía la var nombre.. --}}
        @switch($nombre)
            @case($nombre == 'santi')
                <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}}Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, sit corrupti optio atque debitis voluptates saepe adipisci totam possimus sequi nihil velit asperiores in at quo? Possimus alias sint perspiciatis.</p>
                @break
            @case($nombre == 'china')
                <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}}Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, sit corrupti optio atque debitis voluptates saepe adipisci totam possimus sequi nihil velit asperiores in at quo? Possimus alias sint perspiciatis.</p>
                @break
            @case($nombre == 'jp')
                <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}}Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, sit corrupti optio atque debitis voluptates saepe adipisci totam possimus sequi nihil velit asperiores in at quo? Possimus alias sint perspiciatis.</p>
                @break
            @default
                
        @endswitch
        
    @endif

@endsection