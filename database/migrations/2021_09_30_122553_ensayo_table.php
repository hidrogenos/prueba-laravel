<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnsayoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensayo', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('muestra_id');
            $table->string('nombre');
            $table->string('especificacion');
            $table->integer('resultado');
            $table->timestamps();
            $table->foreign('muestra_id')->references('id')->on('muestra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ensayo');
    }
}
