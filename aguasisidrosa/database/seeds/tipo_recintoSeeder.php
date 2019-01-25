<?php

use Illuminate\Database\Seeder;
use App\Models\Tipo_recinto;

class tipo_recintoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_recinto = new Tipo_recinto();
        $tipo_recinto->tipo_recinto_nombre = 'produccion';        
        $tipo_recinto->save();

        $tipo_recinto = new Tipo_recinto();
        $tipo_recinto->tipo_recinto_nombre = 'distribucion';        
        $tipo_recinto->save();

        $tipo_recinto = new Tipo_recinto();
        $tipo_recinto->tipo_recinto_nombre = 'recoleccion';        
        $tipo_recinto->save();

        $tipo_recinto = new Tipo_recinto();
        $tipo_recinto->tipo_recinto_nombre = 'tratamiento';        
        $tipo_recinto->save();

    }
}
