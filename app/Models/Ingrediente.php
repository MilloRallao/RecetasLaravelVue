<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    /**
     * Las recetas que pertenecer al ingrediente.
     */
    public function recetas()
    {
        return $this->belongsToMany(Receta::class, 'recetaingredientes');
    }
}
