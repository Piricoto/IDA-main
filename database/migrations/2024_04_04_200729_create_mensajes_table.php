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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emisor_id'); // Sender ID, assuming this refers to the user who sends the message
            $table->unsignedBigInteger('receptor_id'); // Receiver ID, assuming this refers to the user who receives the message
            $table->unsignedBigInteger('propiedad_id')->nullable(); // Property ID, can be nullable if the message is not specifically about a property
            $table->text('contenido'); // Content of the message
            $table->boolean('leido'); // Whether the message has been read
            $table->timestamp('fecha_enviado'); // The date and time the message was sent
            $table->timestamps();
    
            // Foreign keys
            $table->foreign('emisor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receptor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('propiedad_id')->references('id')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensaje');
    }
};
