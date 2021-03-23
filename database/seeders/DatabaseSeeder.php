<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre_categoria' => 'Arroces'],
            ['nombre_categoria' => 'Carnes'],
            ['nombre_categoria' => 'Pescados'],
            ['nombre_categoria' => 'Postres'],
            ['nombre_categoria' => 'Sopas'],
            ['nombre_categoria' => 'Potajes'],
        ]);

        DB::table('ingredientes')->insert([
            ['nombre_ingrediente' => 'Agua'],
            ['nombre_ingrediente' => 'Aceite'],
            ['nombre_ingrediente' => 'Huevos'],
            ['nombre_ingrediente' => 'Arroz'],
            ['nombre_ingrediente' => 'Harina'],
            ['nombre_ingrediente' => 'Papas'],
            ['nombre_ingrediente' => 'Ajo'],
            ['nombre_ingrediente' => 'Sal'],
            ['nombre_ingrediente' => 'Pimienta'],
            ['nombre_ingrediente' => 'Calamares'],
            ['nombre_ingrediente' => 'Lentejas'],
            ['nombre_ingrediente' => 'Berros'],
            ['nombre_ingrediente' => 'Zanahoria'],
            ['nombre_ingrediente' => 'Calabaza'],
            ['nombre_ingrediente' => 'Puerro'],
            ['nombre_ingrediente' => 'Pimiento rojo'],
            ['nombre_ingrediente' => 'Pimiento verde'],
            ['nombre_ingrediente' => 'Lubina'],
            ['nombre_ingrediente' => 'Muslo Pollo'],
            ['nombre_ingrediente' => 'Solomillo'],
            ['nombre_ingrediente' => 'Fideos'],
            ['nombre_ingrediente' => 'Macarrones'],
            ['nombre_ingrediente' => 'Espaguetis'],
            ['nombre_ingrediente' => 'Queso amarillo'],
            ['nombre_ingrediente' => 'Cebolla'],
        ]);
    }
}
