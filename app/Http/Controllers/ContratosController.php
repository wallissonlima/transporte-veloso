<?php

namespace App\Http\Controllers;

use App\Models\Entity\Contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contratos::all(); //para trazer todos os contratos do banco 
        return response()->json($contratos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contratos = New Contratos();

        $contratos->fill($request->all());

        $contratos->save();

        return response()->json($contratos, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
       
    public function show($id)
    {
        $contratos = Contratos::find($id);

        if(!$contratos){
            return response()->json(['erro'=> 'Contrato nao encontrado', 404]);
        }

        return response()->json($contratos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $contratos = Contratos::find($id);

        if(!$contratos){
            return response()->json(['erro'=> 'Contratos nao encontrado'], 404);

        }

        $contratos->fill($request->all());

        $contratos->update();

        return response()->json($contratos, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contratos = Contratos::find($id);

        if(!$contratos){
            return response()->json(['erro'=> 'Contratos nao encontrado'], 404);
        }
        $contratos->delete();

        return response()->json(['sucesso'=> 'Contratos excluido com sucesso'], 200);
    
    }
}
