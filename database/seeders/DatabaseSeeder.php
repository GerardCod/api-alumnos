<?php

namespace Database\Seeders;

use App\Models\Evento;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolSeeder::class,
            CarreraSeeder::class,
            UsuarioSeeder::class,
            PCSeeder::class,
            LaboratorioSeeder::class,
            ProgramaSeeder::class,
            EventoSeeder::class
        ]);
    }
}
