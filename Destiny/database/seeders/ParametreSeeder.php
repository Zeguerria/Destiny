<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('parametres')->insert([
            //statuts livraison
            ['id'=>1, 'code'=> "AUCUN", 'libelle'=>"AUCUN", 'description'=>"AUCUN", 'type_parametre_id'=> 1],
            ['id'=>2, 'code'=> "SL-A", 'libelle'=>"Attente", 'description'=>"Livraison en Attente", 'type_parametre_id'=> 2],
            ['id'=>3, 'code'=> "SL-C", 'libelle'=>"En Cours", 'description'=>"Livraison en Cours", 'type_parametre_id'=> 2],
            ['id'=>4, 'code'=> "SL-AN", 'libelle'=>"Annulée", 'description'=>"Livraison Annulée", 'type_parametre_id'=> 2],
            ['id'=>5, 'code'=> "SL-R", 'libelle'=>"Repporté", 'description'=>"Livraison Repportée", 'type_parametre_id'=> 2],
            ['id'=>6, 'code'=> "SL-EF", 'libelle'=>"Effectué", 'description'=>"Livraison Effecuté", 'type_parametre_id'=> 2],
            //statuts livraisons fin
            //role debut
            ['id'=>7, 'code'=> "C-ADMIN", 'libelle'=>"Admin", 'description'=>"Administrateur", 'type_parametre_id'=> 3],
            ['id'=>8, 'code'=> "C-USER", 'libelle'=>"User", 'description'=>"Utilisateur", 'type_parametre_id'=> 3],
            ['id'=>9, 'code'=> "C-SUPERADMIN", 'libelle'=>"Super Admin", 'description'=>"Super Administrateur", 'type_parametre_id'=> 3],
            ['id'=>10, 'code'=> "C-OPERATEUR", 'libelle'=>"Operateur", 'description'=>"Operateur", 'type_parametre_id'=> 3],
            //role fin
            //type produit debut
            ['id'=>11, 'code'=> "TP-MP", 'libelle'=>"Matiere Premiere", 'description'=>"Matiere de Premiere", 'type_parametre_id'=> 5],
            ['id'=>12, 'code'=> "TP-BE", 'libelle'=>"Bien d'equipement", 'description'=>"Bien d'equpement", 'type_parametre_id'=> 5],
            ['id'=>13, 'code'=> "TP-P", 'libelle'=>"Service", 'description'=>"Service", 'type_parametre_id'=> 5],
            ['id'=>14, 'code'=> "TP-F", 'libelle'=>"Fourniture", 'description'=>"Fourniture", 'type_parametre_id'=> 5],
            ['id'=>15, 'code'=> "TP-FH", 'libelle'=>"Pharmacetique", 'description'=>"Pharmacetique", 'type_parametre_id'=> 5],
            //type de produit fin
            //marque produit debut
            ['id'=>16, 'code'=> "M-ADD", 'libelle'=>"Adidas", 'description'=>"Marque Adidas", 'type_parametre_id'=> 4],
            ['id'=>17, 'code'=> "M-R", 'libelle'=>"Rebook", 'description'=>"Marque Rebook", 'type_parametre_id'=> 4],
            //marque produit fin
            //qualite prouit debut
            ['id'=>18, 'code'=> "Q-B", 'libelle'=>"Bonne Etat", 'description'=>"En Bonne  Etat", 'type_parametre_id'=> 6],
            ['id'=>19, 'code'=> "Q-P", 'libelle'=>"Parfait Etat", 'description'=>"En Parfait  Etat", 'type_parametre_id'=> 6],
            ['id'=>20, 'code'=> "Q-N", 'libelle'=>"Neuf", 'description'=>"Nouveau", 'type_parametre_id'=> 6],
            //qualite produit fin
            //role suite debut
            ['id'=>21, 'code'=> "C-LIVREUR", 'libelle'=>"Livreur", 'description'=>"Livreur", 'type_parametre_id'=> 3],
            //role suite fin
        ]);
    }
}
