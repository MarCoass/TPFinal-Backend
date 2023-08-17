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
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('idCategoria');
            $table->unsignedBigInteger('idCiudad');
            $table->float('precio')->nullable();
            $table->text('urlImagenes')->nullable();
            $table->text('descripcion');
            $table->timestamps();

              // Definición de claves foráneas
              $table->foreign('idCategoria')->references('id')->on('categoria_sets');
              $table->foreign('idCiudad')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sets');
    }
};
