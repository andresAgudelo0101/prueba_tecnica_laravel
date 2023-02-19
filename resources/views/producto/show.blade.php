@extends('layouts.layout')

@section('titulo', strtoupper($producto->nombre))
@section('estilo', asset('css/productDetail.css'))


@section('contenido')
    <div class="contenedor container-detail">
        <div>
            <h1 class="titulo">{{ strtoupper($producto->nombre) }}</h1>
        </div>
        <div class="card-product">
            <div class="container-img">
                <img src="{{ asset('img/banner.png') }}" class="img" />
            </div>
            <ul class="product-detail">
                <li><span class="subtitle">Sku:</span> {{ $producto->sku }}</li>
                <li><span class="subtitle">Descripcion:</span> {{ $producto->descripcion }}</li>
                <li><span class="subtitle">Valor:</span> ${{ $producto->valor }}</li>
                <li><span class="subtitle">Tienda:</span> {{ $producto->getTienda($producto->tienda) }} </li>
                <li>
                    <form action="{{ route('producto.destroy', $producto) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn-delete" type="submit">
                            Eliminar
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
@endsection
