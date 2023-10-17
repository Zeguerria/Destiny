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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('poids');
            $table->string('taille');
            $table->string('supprimer')->default(0);
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('marque_id')->default(0);
            $table->foreign('marque_id')->references('id')->on('parametres')->constrained();
            $table->unsignedBigInteger('qualite_id')->default(0);
            $table->foreign('qualite_id')->references('id')->on('parametres')->constrained();
            $table->unsignedBigInteger('typeP_id')->default(0);
            $table->foreign('typeP_id')->references('id')->on('parametres')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
