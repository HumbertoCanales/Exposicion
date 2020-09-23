<?php

use Illuminate\Database\Seeder;
use App\Especie;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Especie::class, 3)->create();
        Especie::create(['nombre' => 'Perro']);
        Especie::create(['nombre' => 'Gato']);
        Especie::create(['nombre' => 'Ganso']);
    }
}
