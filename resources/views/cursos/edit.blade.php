@extends('layouts.plantilla')

@section('title', 'Editar')

@section('content')
    <h1>En esta pagina puedes editar el cursos</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" id="" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion', $curso->descripcion) }}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" id="" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Guardar cambios</button>
    </form>
@endsection
