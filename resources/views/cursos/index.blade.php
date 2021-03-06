@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienviendo a la pagina principal de cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
                <br> {{ route('cursos.show', $curso) }}
            </li>
        @endforeach
    </ul>
    {{ $cursos->links() }}
@endsection
