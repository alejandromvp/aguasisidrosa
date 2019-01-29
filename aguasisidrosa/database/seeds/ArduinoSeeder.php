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
        $arduino->tag = 'tag1';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo';
        $arduino->tag = 'tag2';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo2';
        $arduino->tag = 'tag7';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo';
        $arduino->tag = 'tag3';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo';
        $arduino->tag = 'tag4';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo';
        $arduino->tag = 'tag5';
        $arduino->save();

        $arduino = new Arduino();
        $arduino->nombre_arduino = 'leopardo';
        $arduino->tag = 'tag8';
        $arduino->save();
    }
}
