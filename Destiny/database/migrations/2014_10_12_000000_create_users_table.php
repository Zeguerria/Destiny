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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('pseudo');
            $table->string('photo')->nullable();
            $table->string('supprimer')->default(0);
            $table->string('email')->unique();
            //$table->string('role')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->foreignId('profil_id')->constrained()->default(1);
            $table->foreignId('role_id')->default(0);
            // $table->unsignedBigInteger('profil_id')->default(0);
            // $table->foreign('profil_id')->references('id')->on('users')->constrained();
            // $table->unsignedBigInteger('role_id')->default(0);
            // $table->foreign('role_id')->references('id')->on('parametres')->constrained();

            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
