<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agentes')->insert([
            'primer_nombre' => 'Paula',
            'segundo_nombre' => 'Andrea',
            'primer_apellido' => 'Roca',
            'segundo_apellido' => 'Osorio',
        ]);

        DB::table('agentes')->insert([
            'primer_nombre' => 'Keyla',
            'segundo_nombre' => 'Andrea',
            'primer_apellido' => 'Roca',
            'segundo_apellido' => 'Osorio',
        ]);

        DB::table('agentes')->insert([
            'primer_nombre' => 'Keren',
            'segundo_nombre' => '',
            'primer_apellido' => 'Bermudez',
            'segundo_apellido' => 'Angulo',
        ]);

        DB::table('agentes')->insert([
            'primer_nombre' => 'Argenedis',
            'segundo_nombre' => 'Andrés',
            'primer_apellido' => 'Álvarez',
            'segundo_apellido' => 'Cueto',
        ]);
    }
}