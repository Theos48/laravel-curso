@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <h1>En esta pagina puedes crear cursos</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" id="" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" id="" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
