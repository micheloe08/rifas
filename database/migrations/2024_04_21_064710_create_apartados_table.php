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
        Schema::create('apartados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('sorteo_id')->constrained('sorteos');
            $table->string('boletos');
            $table->integer('pronto_pago')->nullable()->default(0);
            $table->integer('promo')->nullable()->default(0);
            $table->string('estatus')->nullable()->default('Apartado');
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
        Schema::dropIfExists('apartados');
    }
};
