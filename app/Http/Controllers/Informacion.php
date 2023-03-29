<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class Informacion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $titulo = 'Inicio';
        $items = Info::all();
        return view('index', compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Crear gasto o ganancia';
        return view('create' , compact('titulo'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Info();
        $item->tipo = $request->tipo;
        $item->categoria= $request->categoria;
        $item->cantidad= $request->cantidad;
        $item->descripcion= $request->descripcion;
        $item->save();
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar';
        $items = Info::find($id);
        return view('edit', compact('items', 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Info::find($id);
        $item->tipo = $request->tipo;
        $item->categoria= $request->categoria;
        $item->cantidad= $request->cantidad;
        $item->descripcion= $request->descripcion;
        $item->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Info::find($id);
        $datos->delete();
        return back();

    }
}
