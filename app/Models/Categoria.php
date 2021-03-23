<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /**
     * Obtener las recetas de una categoría.
     */
    public function recetas()
    {
        return $this->hasMany(Receta::class);
    }
}
