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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('numTelefono')->nullable();
            $table->unsignedBigInteger('idRol')->nullable();
            $table->bigInteger('idCiudad')->nullable();
            $table->json('setsFavoritos')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idRol')->references('id')->on('roles');
            $table->foreign('idCiudad')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
