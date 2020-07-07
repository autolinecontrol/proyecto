<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('identificacion');
            $table->string('telefono');
            $table->unsignedBigInteger('sucursal_id');

            $table->foreign('sucursal_id')
            ->onDelete('cascade')->references('id')->on('sucursales');
            // $table->foreignId('sucursal_id')
            //         ->constrained('sucursales_table')
            //         ->onDelete('cascade');
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
        Schema::dropIfExists('empleados');
    }
}
