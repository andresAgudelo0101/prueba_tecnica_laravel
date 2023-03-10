<?php

namespace App\Http\Controllers;

use App\Models\tienda;
use Illuminate\Http\Request;


class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = tienda::orderByDesc('id')->get();
        return view('tienda.index',compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tienda.create');
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
                'fecha_apertura' => 'required|date_format:Y-m-d'
            ]
        );
       
        $tienda = tienda::create($datos);
        return redirect()->route('tienda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show(tienda $tienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit(tienda $tienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tienda $tienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(tienda $tienda)
    {
        //
    }
}
