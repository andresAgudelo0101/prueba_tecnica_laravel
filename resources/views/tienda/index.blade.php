@extends('layouts.layout')

@section('titulo', 'Lista de Tiendas')
@section('estilo', asset('css/list.css'))

@section('contenido')
    <div class="contenedor">
        <h1 class="text-center p-3 titulo">Lista de Tiendas</h1>
        <div class="d-flex justify-content-center">
            <table class="table tabla">
                <tr>
                    <th class="th" scope="col">Nombre</th>
                    <th class="th" scope="col">Fecha Apertura</th>
                </tr>
                <tbody>
                    @foreach ($tiendas as $tienda)
                        <tr>
                            <td>{{ $tienda->nombre }}</td>
                            <td>{{ $tienda->fecha_apertura }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
