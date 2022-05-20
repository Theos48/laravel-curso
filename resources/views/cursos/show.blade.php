@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->id)

@section('content')
    <h1>En esta paginan muestra el curso: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @method('delete')
        @csrf
        <button type="submit">Eliminar curso</button>
    </form>
@endsection
