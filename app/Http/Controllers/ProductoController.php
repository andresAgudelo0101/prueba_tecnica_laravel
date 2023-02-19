<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\tienda;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {   
        $cont=0;
        $tiendas = tienda::orderByDesc('id')->get();
        $productos = producto::orderByDesc('id')->get();
        return view('producto.index',compact(['productos','tiendas','cont']));
    }

    public function create()
    {
        $tiendas = tienda::orderByDesc('id')->get();
        return view('producto.create',compact('tiendas'));
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre' => 'required',
                'sku' => 'required|unique:producto,sku,',
                'descripcion' => 'required|max:130',
                'valor' => 'required|numeric',
                'tienda' => 'required',
                'imagen' => 'required',
            ]
        );
       
        $producto = producto::create($datos);
        return redirect()->route('producto.index');
    }

    public function show(producto $producto)
    {
        return view('producto.show',compact('producto'));
    }


    public function edit(producto $producto)
    {
        $tiendas = tienda::orderByDesc('id')->get();
        return view('producto.edit',compact(['producto','tiendas']));
    }

    public function update(Request $request, producto $producto)
    {
        $datos = $request->validate(
            [
                'nombre' => 'required',
                'sku' => 'required|unique:producto,sku,',
                'descripcion' => 'required|max:130',
                'valor' => 'required|numeric',
                'tienda' => 'required',
                'imagen' => 'required',
            ]
        );
           
        $producto -> update($datos);
        return redirect()->route('producto.index');
    }

    public function destroy(producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
