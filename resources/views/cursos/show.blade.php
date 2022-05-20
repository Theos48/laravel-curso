@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>En esta paginan muestra el curso: {{$curso}}</h1>
@endsection
