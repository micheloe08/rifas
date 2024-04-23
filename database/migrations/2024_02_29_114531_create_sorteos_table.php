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
        Schema::create('sorteos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->double('costo', 2);
            $table->dateTime('fecha_sorteo_principal');
            $table->dateTime('fecha_sorteo_preliminar')->nullable();
            $table->string('premio_principal');
            $table->string('premio_preliminar')->nullable();
            $table->string('bono')->nullable();
            $table->string('imagen1')->nullable();
            $table->string('imagen2')->nullable();
            $table->string('imagen3')->nullable();
            $table->integer('tiraje', false, false);
            $table->boolean('status');
            $table->string('ganador_preliminar')->nullable();
            $table->string('ganador_principal')->nullable();
            $table->boolean('bono_ganado');
            $table->string('evidencia')->nullable();
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
        Schema::dropIfExists('sorteos');
    }
};
