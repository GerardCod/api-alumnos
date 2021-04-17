<?php

namespace Database\Seeders;

use App\Models\Laboratorio;
use Illuminate\Database\Seeder;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboratorio::create(['nombre' => 'Laboratorio de tics']);
        Laboratorio::create(['nombre' => 'Laboratorio de consulta']);
        Laboratorio::create(['nombre' => 'Laboratorio de desarrollo de negocios']);
        Laboratorio::create(['nombre' => 'Laboratorio de edificio 1']);
    }
}
