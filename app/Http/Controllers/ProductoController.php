<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\tienda;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cont=0;
        $tiendas = tienda::orderByDesc('id')->get();
        $productos = producto::orderByDesc('id')->get();
        return view('producto.index',compact(['productos','tiendas','cont']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendas = tienda::orderByDesc('id')->get();
        return view('producto.create',compact('tiendas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
