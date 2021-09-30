<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'nombre' => 'BACTRODERM JABON NEUTRO GARRAFA X 3.785 L',
            'codigo' => 'PT64437A',
            'tipo_producto_id' => 1,
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('producto')->insert([
            'nombre' => 'TRIMETOPRIM SULFA 80/400mg CAJA X 100 TAB',
            'codigo' => 'PT60930A',
            'tipo_producto_id' => 2,
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('producto')->insert([
            'nombre' => 'TRIMETOPRIMA SULFAMETOXAZOL TAB 160 /800 mg CAJA X 100',
            'codigo' => 'PT97253A',
            'tipo_producto_id' => 3,
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
