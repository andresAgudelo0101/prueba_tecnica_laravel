@extends('layouts.layout')

@section('titulo','Lista Productos')

@section('contenido')
    <h1>Lista de Productos</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha Apertura</th>
        </tr>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto -> nombre }}</td>
                    <td>{{ $producto -> sku }}</td>
                    <td>{{ $producto -> descripcion }}</td>
                    <td>{{ $producto -> valor }}</td>
                    <td>{{ $producto -> tienda }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


