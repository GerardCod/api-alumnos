<?php

namespace Database\Seeders;

use App\Models\Programa;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Agrega registros a la base de datos de forma automática.
     *
     * @return void
     */
    public function run()
    {
        Programa::create(['nombre' => 'Word', 'nombre_ejecucion' => 'WINWORD.EXE']);
        Programa::create(['nombre' => 'Project', 'nombre_ejecucion' => 'WINPROJ.EXE']);
        Programa::create(['nombre' => 'Excel', 'nombre_ejecucion' => 'EXCEL.EXE']);
        Programa::create(['nombre' => 'Powerpoint', 'nombre_ejecucion' => 'POWERPNT.EXE']);
        Programa::create(['nombre' => 'Chrome', 'nombre_ejecucion' => 'chrome.EXE']);
        Programa::create(['nombre' => 'Publisher', 'nombre_ejecucion' => 'MSPUB.EXE']);
        Programa::create(['nombre' => 'Cisco Packer Tracer', 'nombre_ejecucion' => 'PacketTracer7.EXE']);
        Programa::create(['nombre' => 'Adobe Acrobat Reader', 'nombre_ejecucion' => 'AcroRd32.EXE']);
        Programa::create(['nombre' => 'XAMPP', 'nombre_ejecucion' => 'xampp-control.EXE']);
        Programa::create(['nombre' => 'Outlook', 'nombre_ejecucion' => 'OUTLOOK.EXE']);
    }
}
