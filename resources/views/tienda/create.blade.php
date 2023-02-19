@extends('layouts.layout')

@section('titulo', 'Registrar Tienda')
@section('estilo', asset('css/form.css'))

@section('contenido')
    <div class="contenedor container-form">
        <h1 class="text-center p-3 titulo">Registrar Tienda</h1>
        <form action="{{ route('tienda.store') }}" method="POST" class="form-tienda">
            @csrf
            <div>
                <label class="form-label label">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" class="input-form" />
            </div>
            <div>
                <label class="form-label label">Fecha Apertura</label>
                <input type="date" placeholder="dd-mm-aaaa" name="fecha_apertura" value="{{ old('fecha_apertura') }}"
                    class="input-form" />
            </div>
            <button type="submit" class="btn-save">Guardar</button>
        </form>

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
