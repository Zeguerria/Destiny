<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilHabilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_habilitations')->insert([

            ['id'=>1, 'habilitation_id'=> 1, 'profil_id'=>1],
            ['id'=>2, 'habilitation_id'=> 2, 'profil_id'=>1],
            ['id'=>3, 'habilitation_id'=> 3, 'profil_id'=>1],
            ['id'=>4, 'habilitation_id'=> 2, 'profil_id'=>2],
            //['id'=>5, 'habilitation_id'=> 0, 'profil_id'=>4],
            ['id'=>6, 'habilitation_id'=> 1, 'profil_id'=>4],
            ['id'=>7, 'habilitation_id'=> 2, 'profil_id'=>4],
            ['id'=>8, 'habilitation_id'=> 4, 'profil_id'=>4],
            ['id'=>9, 'habilitation_id'=> 5, 'profil_id'=>4],
            ['id'=>10, 'habilitation_id'=> 6, 'profil_id'=>4],
            // ['id'=>11, 'habilitation_id'=> 0, 'profil_id'=>5],
            ['id'=>12, 'habilitation_id'=> 1, 'profil_id'=>5],
            ['id'=>13, 'habilitation_id'=> 2, 'profil_id'=>5],
            ['id'=>14, 'habilitation_id'=> 4, 'profil_id'=>5],
            ['id'=>15, 'habilitation_id'=> 5, 'profil_id'=>5],
            ['id'=>16, 'habilitation_id'=> 6, 'profil_id'=>5],
            ['id'=>17, 'habilitation_id'=> 8, 'profil_id'=>5],
            ['id'=>18, 'habilitation_id'=> 9, 'profil_id'=>5],
            ['id'=>19, 'habilitation_id'=> 7, 'profil_id'=>5],
            // ['id'=>20, 'habilitation_id'=> 0, 'profil_id'=>6],
            ['id'=>21, 'habilitation_id'=> 1, 'profil_id'=>6],
            ['id'=>22, 'habilitation_id'=> 2, 'profil_id'=>6],
            ['id'=>23, 'habilitation_id'=> 3, 'profil_id'=>6],
            ['id'=>24, 'habilitation_id'=> 4, 'profil_id'=>6],
            ['id'=>25, 'habilitation_id'=> 5, 'profil_id'=>6],
            ['id'=>26, 'habilitation_id'=> 6, 'profil_id'=>6],
            ['id'=>27, 'habilitation_id'=> 7, 'profil_id'=>6],
            ['id'=>28, 'habilitation_id'=> 8, 'profil_id'=>6],
            ['id'=>29, 'habilitation_id'=> 9, 'profil_id'=>6],
            ['id'=>30, 'habilitation_id'=> 10, 'profil_id'=>6],
            ['id'=>31, 'habilitation_id'=> 11, 'profil_id'=>6],
         ]);
    }
}
