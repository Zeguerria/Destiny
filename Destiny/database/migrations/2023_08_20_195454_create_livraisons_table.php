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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->string('lieuLivraison');
            $table->string('lieuRecuperation');
            // $table->string('natureColis');
            $table->integer('prix');
            $table->string('avisClient')->nullable();
            $table->string('commentareLivreur')->nullable();
            $table->string('supprimer')->default(0);
            //champs client debut
            /*$table->unsignedBigInteger('client_id')->default(0);
            $table->foreign('client_id')->references('id')->on('users')->constrained();*/
            //champs client fin
            $table->unsignedBigInteger('client_id')->default(0);
            $table->foreign('client_id')->references('id')->on('clients')->constrained();
            //destinataire
            $table->unsignedBigInteger('destinataire_id')->default(0);
            $table->foreign('destinataire_id')->references('id')->on('destinataires')->constrained();
            $table->timestamps();

            //
            $table->unsignedBigInteger('statut_id')->default(0);
            $table->foreign('statut_id')->references('id')->on('parametres')->constrained();
            //
            $table->unsignedBigInteger('livreur_id')->default(0);
            $table->foreign('livreur_id')->references('id')->on('livreurs')->constrained();
            $table->unsignedBigInteger('produit_id')->default(0);
            $table->foreign('produit_id')->references('id')->on('produits')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
