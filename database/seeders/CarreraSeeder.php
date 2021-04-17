<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Carrera::create(['nombre' => 'Tecnolpgías de la información']);
        Carrera::create(['nombre' => 'Mecatrónica']);
        Carrera::create(['nombre' => 'Desarrollo de negocios']);
        Carrera::create(['nombre' => 'Energías renovables']);
        Carrera::create(['nombre' => 'Industriales']);
    }
}
