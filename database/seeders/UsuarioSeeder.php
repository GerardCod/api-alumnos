<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuario::create(['matricula' => '3517110232', 'nombre' => 'Ruth Nazareth', 'a_paterno' => 'García', 'a_materno' => 'Enriquez', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 1]);
        Usuario::create(['matricula' => '3517110229', 'nombre' => 'Ángel', 'a_paterno' => 'Amador', 'a_materno' => 'Olivera', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 1]);
        Usuario::create(['matricula' => '3517110107', 'nombre' => 'Luis', 'a_paterno' => 'Ariza', 'a_materno' => 'Bonilla', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 1]);
        Usuario::create(['matricula' => '3517110706', 'nombre' => 'Luis Enrique', 'a_paterno' => 'Casas', 'a_materno' => 'Yañez', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 1]);
        Usuario::create(['matricula' => '3517110199', 'nombre' => 'Arturo', 'a_paterno' => 'Cirildo', 'a_materno' => 'Herrera', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 1]);
        Usuario::create(['matricula' => '3517110363', 'nombre' => 'Juan Carlos', 'a_paterno' => 'De Jesús', 'a_materno' => 'Yañez', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 1]);
        Usuario::create(['matricula' => '3517110591', 'nombre' => 'Raúl', 'a_paterno' => 'Armas', 'a_materno' => 'Flores', 'cuatrimestre' => '11°', 'rol_id' => 3, 'carrera_id' => 5]);
    }
}
