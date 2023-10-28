<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('esmaltes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_color');
            $table->integer('usos_maximos');
            $table->integer('usos');
            $table->unsignedBigInteger('id_insumo');
            $table->timestamps();

            // Definir la relación con la tabla "insumos"
            $table->foreign('id_insumo')->references('id')->on('insumos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esmaltes');
    }
};
