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
            <input type="text" name="name" id="" value="{{$curso->name}}">
        </label>
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{$curso->descripcion}}</textarea>
        </label>
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" id="" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Guardar cambios</button>
    </form>
@endsection
