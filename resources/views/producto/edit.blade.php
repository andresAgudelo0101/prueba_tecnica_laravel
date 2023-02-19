@extends('layouts.layout')

@section('titulo', 'Registrar Producto')
@section('estilo', asset('css/form.css'))

@section('contenido')
    <div class="contenedor container-form">
        <h1 class="titulo">Editar Producto</h1>
        <form action="{{ route('producto.update', $producto) }}" method="POST" enctype="multipart/form-data" class="form-producto">
            @method('PUT')
            @csrf
            <div>
                <label class="form-label label">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}" placeholder="Nombre"
                    class="input-form" />
            </div>
            <div>
                <label class="form-label label">SKU</label>
                <input type="text" name="sku" value="{{ old('sku', $producto->sku) }}" placeholder="Sku"
                    class="input-form" />
            </div>
            <div>
                <label class="form-label label">Descripcion</label>
                <textarea cols="20" rows="5" name="descripcion" class="form-control t-tarea">
                {{ old('descripcion', $producto->descripcion) }}
            </textarea>
            </div>
            <div>
                <label class="form-label label">Valor</label>
                <input type="number" name="valor" value="{{ old('valor', $producto->valor) }}" placeholder="Valor"
                    class="input-form" />
            </div>
            <div>
                <label class="form-label label">Tienda</label>
                <select name="tienda" class="form-select">
                    @foreach ($tiendas as $tienda)
                        <option value="{{ $tienda->id }}">
                            {{ $tienda->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label label">Imagen</label>
                <input type="file" name="imagen" id="file" accept=".jpg,.jpge,.png" class="form-control"
                    value="{{ old('imagen', $producto->nombre) }}">
            </div>
            <button type="submit" class="btn-save">Guardar</button>
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
@endsection
