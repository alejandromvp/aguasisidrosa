<?php

use Illuminate\Database\Seeder;
use App\Models\Recintos;

class recintosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recinto = new Recintos();
        $recinto->recinto_nombre = 'RECINTO ESTANQUE';
        $recinto->recinto_orden = '10';
        $recinto->localidad_id = 1;
        $recinto->tipo_recinto_id = 1;
        $recinto->arduino_id = 1;
        $recinto->save();

        $recinto = new Recintos();
        $recinto->recinto_nombre = 'RECINTO ESTACION';
        $recinto->recinto_orden = '20';
        $recinto->localidad_id = 1;
        $recinto->tipo_recinto_id = 1;
        $recinto->arduino_id = 3;
        $recinto->save();

        $recinto = new Recintos();
        $recinto->recinto_nombre = 'RECINTO ESTANQUE LOMAS';
        $recinto->recinto_orden = '30';
        $recinto->localidad_id = 1;
        $recinto->tipo_recinto_id = 1;
        $recinto->arduino_id = 2;
        $recinto->save();

        $recinto = new Recintos();
        $recinto->recinto_nombre = 'LOS CONQUISTADORES';
        $recinto->recinto_orden = '40';
        $recinto->localidad_id = 1;
        $recinto->tipo_recinto_id = 1;
        $recinto->arduino_id = 4;
        $recinto->save();

        $recinto = new Recintos();
        $recinto->recinto_nombre = 'REELEVADORA';
        $recinto->recinto_orden = '50';
        $recinto->localidad_id = 1;
        $recinto->tipo_recinto_id = 2;
        $recinto->arduino_id = 5;
        $recinto->save();

        $recinto = new Recintos();
        $recinto->recinto_nombre = 'EL ATUN';
        $recinto->recinto_orden = '60';
        $recinto->localidad_id = 2;
        $recinto->tipo_recinto_id = 1;
        $recinto->arduino_id = 6;
        $recinto->save();

        $recinto = new Recintos();
        $recinto->recinto_nombre = 'RECINTO OFICINA';
        $recinto->recinto_orden = '70';
        $recinto->localidad_id = 6;
        $recinto->tipo_recinto_id = 1;
        $recinto->arduino_id = NULL;
        $recinto->save();

    }
}
