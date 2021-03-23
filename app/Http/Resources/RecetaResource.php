<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecetaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre_receta' =>$this->nombre_receta,
            'nombre_categoria' =>$this->categoria->nombre_categoria,
            'ingredientes' =>$this->ingredientes()->pluck('nombre_ingrediente')
        ];
    }
}
