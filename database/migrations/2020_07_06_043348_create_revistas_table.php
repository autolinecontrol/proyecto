<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revistas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_de_registro');
            $table->string('titulo');
            $table->string('periocidad');
            $table->string('tipo');
            $table->integer('numero_paginas');
            $table->integer('numero_vendidos');
            $table->timestamp('fecha', 0);
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')
            ->onDelete('cascade')->references('id')->on('sucursales');
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revistas');
    }
}
