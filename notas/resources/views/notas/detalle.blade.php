@extends('master')

@section('seccion')
    <h1>Detalle de nota:</h1>
    <h4>#id: {{$nota -> id}} </h4>
    <h4>Nombre: {{$nota -> nombre}} </h4>
    <h4>Descr: {{$nota -> descripcion}} </h4>
@endsection