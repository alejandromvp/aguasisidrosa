<?php

use Illuminate\Database\Seeder;
use App\Models\variables;

class variablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $role = [
               ['variables' => 'temperatura'],
               ['variables' => 'presion']      
        ];
        foreach ($role as $key => $value) variables::create($value);
    }
}
