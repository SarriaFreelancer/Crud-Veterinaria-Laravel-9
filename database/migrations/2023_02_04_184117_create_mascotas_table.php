<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('codigo_mascota', true);
            $table->string('nombre_mascota', 50);
            $table->string('tipo_mascota', 50);
            $table->bigInteger('documentoid')->unsigned();
            $table->foreign('documentoid')
                  ->references('documentoid')
                  ->on('clientes')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
};
