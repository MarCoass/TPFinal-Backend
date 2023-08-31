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
            $table->unsignedBigInteger('idInsumo');
            $table->unsignedBigInteger('idProveedor');
            $table->float('precio');
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('idProveedor')->references('id')->on('proveedores');
            $table->foreign('idInsumo')->references('id')->on('insumos');
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
