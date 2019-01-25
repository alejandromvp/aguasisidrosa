<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArduinoSeeder::class);
        $this->call(RoleTableSeeder::class);
		$this->call(UserTableSeeder::class);
        $this->call(variablesSeeder::class);
        $this->call(localidadSeeder::class);
        $this->call(tipo_recintoSeeder::class);
        $this->call(recintosSeeder::class);
    }
}
