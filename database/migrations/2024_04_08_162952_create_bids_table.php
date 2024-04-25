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
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('propiedad_id');
            $table->decimal('apuesta', 10, 2); // Apuesta de la puja
            $table->timestamps();
        
            // Clave foránea que referencia a 'id' en la tabla 'users'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
            // Clave foránea que referencia a 'id' en la tabla 'propiedades'
            $table->foreign('propiedad_id')->references('id')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
