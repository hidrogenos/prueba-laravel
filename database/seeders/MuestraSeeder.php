<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuestraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muestra')->insert([
            'lote' => '2004753',
            'cliente' => 'Laboratorios ECAR',
            'producto_id' => 2,
            'fecha_llegada' => '2020-05-26 15:27:14',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('muestra')->insert([
            'lote' => '20058794',
            'cliente' => 'Laboratorio LQF',
            'producto_id' => 1,
            'fecha_llegada' => '2020-05-27 08:32:51',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'lote' => '1005487',
            'cliente' => 'Laboratorio JGB',
            'producto_id' => 3,
            'fecha_llegada' => '2020-05-28 13:26:32',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
