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
        Schema::create('user_propiedad', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('propiedad_id');
            $table->timestamps();
        
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('propiedad_id')->references('id')->on('propiedades')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_propiedad');
    }
};
