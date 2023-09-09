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
        Schema::create('precio_proveedores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_insumo');
            $table->unsignedBigInteger('id_proveedor');
            $table->float('precio');
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
            $table->foreign('id_insumo')->references('id')->on('insumos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precio_proveedores');
    }
};
