@extends('layouts.layout')

@section('titulo', 'Registrar Tienda')

@section('contenido')
    <div class="contenedor">
        <h1 class="text-center p-3 titulo">Registrar Tienda</h1>
        <div class="d-flex justify-content-center">
            <form action="{{ route('tienda.store') }}" method="POST">
                @csrf
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" class="form-control"/>
                <label class="form-label">Fecha Apertura</label>
                <input type="date" placeholder="dd-mm-aaaa" name="fecha_apertura" value="{{ old('fecha_apertura') }}" class="form-control"/>
                <button type="submit">Guardar</button>
            </form>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
