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
        Carrera::create(['nombre' => 'Tecnologías de la información']);
        Carrera::create(['nombre' => 'Desarrollo de negocios']);
        Carrera::create(['nombre' => 'Mecatrónica']);
        Carrera::create(['nombre' => 'Procesos Alimentarios']);
        Carrera::create(['nombre' => 'Energías renovables']);
        Carrera::create(['nombre' => 'Agricultura Sustentable y protegida']);
        Carrera::create(['nombre' => 'Enfermería']);
        Carrera::create(['nombre' => 'Procesos Industriales']);
    }
}
