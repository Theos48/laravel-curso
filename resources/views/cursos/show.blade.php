@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->id)

@section('content')
    <h1>En esta paginan muestra el curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p>{{$curso->descripcion}}</p>
@endsection
