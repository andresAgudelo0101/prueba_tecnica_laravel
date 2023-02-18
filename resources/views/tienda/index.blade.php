@extends('layouts.layout')

@section('titulo','Registrar Tienda')

@section('contenido')
    <h1>Lista de tiendas</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha Apertura</th>
        </tr>
        <tbody>
            @foreach ($tiendas as $tienda)
                <tr>
                    <td>{{ $tienda -> nombre }}</td>
                    <td>{{ $tienda -> fecha_apertura }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


