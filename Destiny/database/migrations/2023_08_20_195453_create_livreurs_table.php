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
        Schema::create('livreurs', function (Blueprint $table) {
            $table->id();
            $table->string('domicile');
            $table->string('numeroPermis');
            $table->string('phone');
            $table->string('supprimer')->default(0);
            //champs users debut
            $table->unsignedBigInteger('user_id')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->constrained();
            //champs users fin
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livreurs');
    }
};
