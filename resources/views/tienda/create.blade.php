@extends('layouts.layout')

@section('titulo','Registrar Tienda')

@section('contenido')
<h1>Registrar Tienda</h1>
    <form action="{{ route('tienda.store') }}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre"/>
        <label>Fecha Apertura</label>
        <input 
        type="date"  
        min="30-01-1910" 
        name="fecha_apertura" />
        <button type="submit">Guardar</button>
    </form>
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif