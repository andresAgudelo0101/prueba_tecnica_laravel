@extends('layouts.layout')

@section('titulo', 'Lista Productos')
@section('estilo', asset('css/list.css'))

@section('contenido')
    <div class="contenedor">
        <h1 class="text-center p-3 titulo">Lista de Productos</h1>
        <div class="d-flex justify-content-center">
            <table class="table tabla">
                <tr>
                    <th class="th" scope="col">Nombre</th>
                    <th class="th" scope="col">SKU</th>
                    <th class="th" scope="col">Descripcion</th>
                    <th class="th" scope="col">Valor</th>
                    <th class="th" scope="col">Tienda</th>
                    <th class="th" scope="col">Imagen</th>
                    <th class="th" scope="col">Administrar</th>
                </tr>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->sku }}</td>
                            <td class="description">{{ $producto->descripcion }}</td>
                            <td>{{ $producto->valor }}</td>
                            <td>{{ $producto->getTienda($producto->tienda) }}</td>
                            <td><img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" /></td>
                            <td>
                                <a href="{{ route('producto.edit',$producto)}}" class="btn-edit">Editar</a>
                                <a href="{{ route('producto.show',$producto)}}" class="btn-watch">Ver Detalle</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
