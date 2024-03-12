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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('dateachat');
            $table->string('kmdefaut');
            $table->string('matricule');
            $table->string('statut');
            $table->string('chauffeur');
            $table->string('image')->nullable('mimes:png,jpg,jpeg,webp');
            // $table->string('vignette');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
