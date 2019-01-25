<?php

use Illuminate\Database\Seeder;
use App\Models\Arduino;
class ArduinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arduino = new Arduino();
        $arduino->nombre_arduino = 'arduino-uno';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo';
        $arduino->save();
    }
}
