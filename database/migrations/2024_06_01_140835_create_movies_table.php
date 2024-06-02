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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id'); //Se crea el campo genre_id que es un FK de la tabla genres, vinculado al campo id 
            $table->string('title',500); //Se crea el campo title tipo varchar y acepta 500 caracteres
            $table->integer('rating');  //Se crea el campo rating entero 
            $table->integer('awards'); //Se crea el campo awards tipo entero
            $table->year('release_year');  //Campo tipo año 
            $table->integer('length'); 
            $table->char('state',4)->default('A')->comment('A:active|I:inactive'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
