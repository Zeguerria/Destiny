<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('type_parametres')->insert([
            ['id'=>1, 'code'=> "AUCUN", 'libelle'=>"AUCUN", 'description'=>"AUCUN"],
            ['id'=>2, 'code'=> "STATUT", 'libelle'=>"Les statut", 'description'=>"Liste des statuts"],
            ['id'=>3, 'code'=> "ROLE", 'libelle'=>"Les roles", 'description'=>"Liste des roles utilisateur"],
            ['id'=>4, 'code'=> "MARQUE", 'libelle'=>"Les marques", 'description'=>"Liste des  marques"],
            ['id'=>5, 'code'=> "TYPE", 'libelle'=>"Les types", 'description'=>"Liste des  types"],
            ['id'=>6, 'code'=> "QUALITE", 'libelle'=>"Les qualité", 'description'=>"Liste des  qualitées"],
        ]);
    }
}
