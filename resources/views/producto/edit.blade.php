@extends('layouts.layout')

@section('titulo', 'Registrar Producto')

@section('contenido')
    <div class="contenedor">
        <h1>Editar Producto</h1>
        <form action="{{ route('producto.update', $producto) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}" placeholder="Nombre"
                class="form-control" />
            <label class="form-label">SKU</label>
            <input type="text" name="sku" value="{{ old('sku', $producto->sku) }}" placeholder="Sku"
                class="form-control" />
            <label class="form-label">Descripcion</label>
            <textarea cols="20" rows="5" name="descripcion" class="form-control">
                {{ old('descripcion', $producto->descripcion) }}
            </textarea>
            <label class="form-label">Valor</label>
            <input type="number" name="valor" value="{{ old('valor', $producto->valor) }}" placeholder="Valor"
                class="form-control" />
            <label class="form-label">Tienda</label>
            <select name="tienda" class="form-select">
                @foreach ($tiendas as $tienda)
                    <option value="{{ $tienda->id }}">
                        {{ $tienda->nombre }}
                    </option>
                @endforeach
            </select>
            <label class="form-label">Imagen</label>
            <input type="file" name="imagen" id="file" accept=".jpg,.jpge,.png" class="form-control"
                value="{{ old('imagen', $producto->nombre) }}">
            <button type="submit" class="btn btn-success mt-4">Guardar</button>
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
