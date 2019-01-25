<?php

use Illuminate\Database\Seeder;
use App\Models\Localidad;

class localidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localidad = new Localidad();
        $localidad->localidad_codigo = 10;
        $localidad->localidad_nombre = 'Labranza';
        $localidad->localidad_orden = '10';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 21;
        $localidad->localidad_nombre = 'Pichindagui';
        $localidad->localidad_orden = '20';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 25;
        $localidad->localidad_nombre = 'Pillanlelbun';
        $localidad->localidad_orden = '30';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 30;
        $localidad->localidad_nombre ='Temuco poniente';
        $localidad->localidad_orden = '40';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 40;
        $localidad->localidad_nombre = 'San ramon';
        $localidad->localidad_orden = '50';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 50;
        $localidad->localidad_nombre = 'Padre hurtado';
        $localidad->localidad_orden = '60';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 60;
        $localidad->localidad_nombre = '¡Los molles';
        $localidad->localidad_orden = '70';
        $localidad->save();

        $localidad = new Localidad();
        $localidad->localidad_codigo = 70;
        $localidad->localidad_nombre = 'Puerto montt';
        $localidad->localidad_orden = '80';
        $localidad->save();
    }
}
