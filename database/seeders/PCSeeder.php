<?php

namespace Database\Seeders;

use App\Models\PC;
use Illuminate\Database\Seeder;

class PCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PC::create(['nombre' => 'Pc1']);
        PC::create(['nombre' => 'Pc2']);
        PC::create(['nombre' => 'Pc3']);
        PC::create(['nombre' => 'Pc4']);
        PC::create(['nombre' => 'Pc5']);
        PC::create(['nombre' => 'Pc6']);
        PC::create(['nombre' => 'Pc7']);
        PC::create(['nombre' => 'Pc8']);
        PC::create(['nombre' => 'Pc9']);
    }
}
