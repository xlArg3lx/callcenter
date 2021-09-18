<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposLlamadasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_llamadas')->insert([
            'tipo_llamada' => 'Cotización',
        ]);

        DB::table('tipos_llamadas')->insert([
            'tipo_llamada' => 'Domicilio',
        ]);

        DB::table('tipos_llamadas')->insert([
            'tipo_llamada' => 'Resultados',
        ]);

        DB::table('tipos_llamadas')->insert([
            'tipo_llamada' => 'Pin - Órden',
        ]);

        DB::table('tipos_llamadas')->insert([
            'tipo_llamada' => 'Otro',
        ]);
    }
}