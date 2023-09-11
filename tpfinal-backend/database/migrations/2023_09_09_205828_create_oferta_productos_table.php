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
        Schema::create('oferta_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_oferta');
            $table->unsignedBigInteger('id_producto');
            $table->timestamps();

            $table->foreign('id_oferta')->references('id')->on('ofertas');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferta_productos');
    }
};
