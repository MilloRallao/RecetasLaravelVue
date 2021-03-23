<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecetaResource;
use App\Models\Categoria;
use App\Models\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Obtiene todas las categorias
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData(){
        $recetas = Receta::all();

        $recetas = RecetaResource::collection($recetas);

        return response()->json($recetas);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $receta = new Receta();

        $receta->nombre_receta = $request->receta['nombre'];
        $receta->categoria_id = $request->receta['categoria'];

        $receta->save();
        foreach ($request->receta['ingredientes'] as $ingrediente) {
            $receta->ingredientes()->attach($receta->id, ['ingrediente_id'=>$ingrediente]);
        }

        return response()->json([
            'receta' => $receta,
            'message' => 'Success'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Receta $recetas
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $recetas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Receta $recetas
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $recetas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Receta $recetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $recetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Receta $recetas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $recetas)
    {
        //
    }
}
