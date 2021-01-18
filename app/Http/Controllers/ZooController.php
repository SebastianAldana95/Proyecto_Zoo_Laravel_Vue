<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zoo;

class ZooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zoos = Zoo::all();
        return $zoos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zoo = new Zoo();
        $zoo->nombre = $request->nombre;
        $zoo->ciudad = $request->ciudad;
        $zoo->pais = $request->pais;
        $zoo->tamano = $request->tamano;
        $zoo->presu_anual = $request->presu_anual;
        $zoo->save();
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
        //
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
        $zoo = Zoo::findOrFail($request->id);
        $zoo->nombre = $request->nombre;
        $zoo->ciudad = $request->ciudad;
        $zoo->pais = $request->pais;
        $zoo->tamano = $request->tamano;
        $zoo->presu_anual = $request->presu_anual;
        $zoo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
