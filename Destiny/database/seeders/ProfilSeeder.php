<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('profils')->insert([
            ['id'=>1, 'code'=> "AUCUN", 'libelle'=>"AUCUN", 'description'=>"AUCUN"],
            ['id'=>2, 'code'=> "P-US", 'libelle'=>"User", 'description'=>"Simple Utilisateur"],
            ['id'=>3, 'code'=> "P-LI", 'libelle'=>"Livreur", 'description'=>"Livreur de l'entreprise"],
            ['id'=>4, 'code'=> "P-OP", 'libelle'=>"Operateur", 'description'=>"Operateur de l'entreprise"],
            ['id'=>5, 'code'=> "P-A", 'libelle'=>"Admin", 'description'=>"Administrateur de l'entreprise"],
            ['id'=>6, 'code'=> "P-SA", 'libelle'=>"SuperAdmin", 'description'=>"Concepteur de l'application "],
        ]);
    }
}
