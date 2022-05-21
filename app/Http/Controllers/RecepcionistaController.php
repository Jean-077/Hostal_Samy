<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcionista;

class RecepcionistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recepcionistas = Recepcionista::all();
        return view('recepcionista.index')->with('recepcionistas',$recepcionistas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recepcionista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recepcionistas = new recepcionista();
        $recepcionistas -> codRecepcionista = $request->get('codigo');
        $recepcionistas -> nombre = $request->get('nombre');
        $recepcionistas -> apellido = $request->get('apellido');
        $recepcionistas -> DNI = $request->get('DNI');
        
        $recepcionistas -> save();

        return redirect('/recepcionista');
        
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
        $recepcionista = Recepcionista::find($id);
        return view('recepcionista/edit')->with('recepcionista',$recepcionista);
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
        $recepcionista = Recepcionista::find($id);
        $recepcionista -> codRecepcionista = $request->get('codigo');
        $recepcionista -> nombre = $request->get('nombre');
        $recepcionista -> apellido = $request->get('apellido');
        $recepcionista -> DNI = $request->get('DNI');
        
        $recepcionista -> save();

        return redirect('/recepcionista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recepcionista = Recepcionista::find($id);

        $recepcionista->delete();

        return redirect('/recepcionista');
    }
}
