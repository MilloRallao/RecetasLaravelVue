<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_receta',
        'categoria_id'
    ];

    /**
     * Los ingredientes que perteneces a la receta.
     */
    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'recetaingredientes');
    }

    /**
     * Obtener la categoria de la receta.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
