<?php

namespace App\Http\Controllers;

use App\Models\Entity\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque = Estoque::all(); //para trazer todos os contratos do banco 
        return response()->json($estoque);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $estoque = New Estoque();

        $estoque->fill($request->all());

        $estoque->save();

        return response()->json($estoque, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
       
    public function show($id)
    {
        $estoque = Estoque::find($id);

        if(!$estoque){
            return response()->json(['erro'=> 'Estoque nao encontrado', 404]);
        }

        return response()->json($estoque);
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
        $estoque = Estoque::find($id);

        if(!$estoque){
            return response()->json(['erro'=> 'Estoque nao encontrado'], 404);

        }

        $estoque->fill($request->all());

        $estoque->update();

        return response()->json($estoque, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estoque = Estoque::find($id);

        if(!$estoque){
            return response()->json(['erro'=> 'Estoque nao encontrado'], 404);
        }
        $estoque->delete();

        return response()->json(['sucesso'=> 'estoque excluido com sucesso'], 200);
    
    }
}
