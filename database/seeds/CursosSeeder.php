<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([

            'name' => 'Medio Menor',
            'cantidad_alumnos'=> '6',

        ]);

        Curso::create([

            'name' => 'Medio Mayor',
            'cantidad_alumnos'=> '5',

        ]);

        Curso::create([

            'name' => 'Prekinder',
            'cantidad_alumnos'=> '6',

        ]);

    }
}
