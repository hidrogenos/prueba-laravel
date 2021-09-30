<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_producto')->insert([
            'nombre' => 'Materia prima',
            'abreviatura' => 'MP',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tipo_producto')->insert([
            'nombre' => 'Material de envase y empaque',
            'abreviatura' => 'ME',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tipo_producto')->insert([
            'nombre' => 'Producto en proceso',
            'abreviatura' => 'PP',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tipo_producto')->insert([
            'nombre' => 'Producto terminado',
            'abreviatura' => 'PT',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tipo_producto')->insert([
            'nombre' => 'Granel',
            'abreviatura' => 'GR',
            'activo' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tipo_producto')->insert([
            'nombre' => 'Promoción',
            'abreviatura' => 'PMA',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
