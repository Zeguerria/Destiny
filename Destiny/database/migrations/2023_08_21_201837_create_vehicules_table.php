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
            $table->string('modelVehicule');
            $table->string('marqueVehicule');
            $table->string('typeVehicule');
            $table->string('numeroMatricule');
            $table->string('supprimer')->default(0);
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('livreur_id')->default(0);
            $table->foreign('livreur_id')->references('id')->on('livreurs')->constrained();
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
