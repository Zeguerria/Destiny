<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HabilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('habilitations')->insert([
            ['id'=>1, 'code'=> "0", 'libelle'=>"AUCUN", 'description'=>"AUCUN"],
            //NAVIGATION
            ['id'=>2, 'code'=> "1", 'libelle'=>"MENU", 'description'=>"Peut consulter le Menu sans les corbeilles"],
            ['id'=>3, 'code'=> "2", 'libelle'=>"MENUS", 'description'=>"Peut consulter le Menu et les corbeilles"],
            //CREUD
            ['id'=>4, 'code'=> "3", 'libelle'=>"CREER", 'description'=>"Peut CREER , access au bouton Creer"],
            ['id'=>5, 'code'=> "4", 'libelle'=>"CORBEILLE", 'description'=>"Peut Mettre en corebeilles des Elemenets"],
            ['id'=>6, 'code'=> "5", 'libelle'=>"MODIFIER", 'description'=>"Peut Modifier un elemenet"],
            ['id'=>7, 'code'=> "6", 'libelle'=>"SUPPRIMER", 'description'=>"Peut supprimer un element"],
            ['id'=>8, 'code'=> "7", 'libelle'=>"CORBEILLES", 'description'=>"Peut mettre en corbeille tous les elements"],
            ['id'=>9, 'code'=> "8", 'libelle'=>"RESTORER", 'description'=>"Peut Restorer un  element"],
            ['id'=>10, 'code'=> "9", 'libelle'=>"RESTORERS", 'description'=>"peut Restorer Tous  elements"],
            ['id'=>11, 'code'=> "10", 'libelle'=>"TOUT", 'description'=>"Toutes les fonctionnalités"],
            ['id'=>12, 'code'=> "11", 'libelle'=>"SUPPRIMERS", 'description'=>"Supprimer Tous les elements"],
        ]);
    }
}
