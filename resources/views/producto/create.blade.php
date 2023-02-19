@extends('layouts.layout')

@section('titulo', 'Registrar Producto')
@section('estilo', asset('css/form.css'))


@section('contenido')
    <div class="contenedor container-form">
        <h1 class="titulo">Registrar Producto</h1>
        <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data" class="form-producto">
            @csrf
            <div>
                <label class="form-label label">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" class="input-form" />
            </div>
            <div>
                <label class="form-label label">SKU</label>
                <input type="text" name="sku" value="{{ old('sku') }}" placeholder="Sku" class="input-form" />
            </div>
            <div>
                <label class="form-label label">Descripcion</label>
                <textarea cols="20" rows="5" name="descripcion" class="form-control t-tarea">
                {{ old('descripcion') }}
            </textarea>
            </div>
            <div>
                <label class="form-label label">Valor</label>
                <input type="number" name="valor" value="{{ old('valor') }}" placeholder="Valor" class="input-form" />
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
                <input type="file" name="imagen" id="fileInput" class="form-control" accept=".jpg,.png,.jpge">
            </div>
            <button type="submit" class="btn-save">Guardar</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="contenedor-alerta">
            <ul class="alert alert-danger alerta">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
