<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create(['nombre'=> 'Argentina']);
        Pais::create(['nombre'=> 'Brasil']);
        Pais::create(['nombre'=> 'Colombia']);
    }
}
