<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create(['inicio' => '20:57:45', 'fin' => '20:58:54', 'pc_id' => 1, 'laboratorio_id' => 2, 'usuario_id' => 1, 'programa_id' => 3]);
        Evento::create(['inicio' => '15:32:15', 'fin' => '15:45:19', 'pc_id' => 1, 'laboratorio_id' => 2, 'usuario_id' => 2, 'programa_id' => 1]);
    }
}
