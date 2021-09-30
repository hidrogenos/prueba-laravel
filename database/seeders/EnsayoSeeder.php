<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnsayoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muestra')->insert([
            'muestra_id' => 1,
            'nombre' => 'Valoración',
            'especificacion' => 'No mayo a 3',
            'resultado' => 8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 1,
            'nombre' => 'HPLC',
            'especificacion' => 'Cumple / No cumple',
            'resultado' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 1,
            'nombre' => 'Disolución',
            'especificacion' => 'Maximo 45',
            'resultado' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 2,
            'nombre' => 'Valoración',
            'especificacion' => 'No mayo a 5',
            'resultado' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 2,
            'nombre' => 'HPLC',
            'especificacion' => 'Cumple / No cumple',
            'resultado' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 2,
            'nombre' => 'Disolución',
            'especificacion' => 'Maximo 38',
            'resultado' => 37,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 3,
            'nombre' => 'Valoración',
            'especificacion' => 'No mayo a 369',
            'resultado' => 52,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 3,
            'nombre' => 'HPLC',
            'especificacion' => 'Cumple / No cumple',
            'resultado' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('muestra')->insert([
            'muestra_id' => 3,
            'nombre' => 'Disolución',
            'especificacion' => 'Maximo 23',
            'resultado' => 23,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
