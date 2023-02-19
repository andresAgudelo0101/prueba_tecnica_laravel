@extends('layouts.layout')

@section('titulo', 'Detalle Producto')

@section('contenido')
    <div class="contenedor">
        <h1 class="titulo">{{ $producto->nombre }}</h1>
        <ul class="card">
            <li>
                <img class="img-prod" src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}"/>
            </li>
            <li>Sku: {{ $producto->sku }}</li>
            <li>Descripcion: {{ $producto->descripcion }}</li>
            <li>Valor: ${{ $producto->valor }}</li>
            <li>Tienda: {{ $producto->getTienda($producto->tienda) }} </li>
            <li>
                <form action="{{ route('producto.destroy',$producto) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">
                        Eliminar
                    </button>
                </form>
            </li>
        </ul>
    </div>
@endsection
