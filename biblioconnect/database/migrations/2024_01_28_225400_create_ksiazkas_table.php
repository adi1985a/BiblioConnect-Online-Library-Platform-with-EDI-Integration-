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
        Schema::create('ksiazki', function (Blueprint $table) {
            $table->id();
            $table->string('tytul');
            $table->string('autor');
            $table->year('rok_wydania');
            $table->string('kategoria');
            $table->boolean('dostepnosc');
            $table->string('miniatura')->nullable(); // Dodane pole na ścieżkę do obrazka
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ksiazkas');
    }
};

