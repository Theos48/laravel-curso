@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <h1>En esta pagina puedes crear cursos</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </label>
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" id="">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
