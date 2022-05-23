@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <label for="">
            Correo:
            <br>
            <input type="email" name="correo" id="">
        </label>
        @error('correo')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        @error('mensaje')
            <br>
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Enviar correo</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif
@endsection
