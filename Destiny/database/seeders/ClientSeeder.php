<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clients')->insert([
            ['id'=>1, 'nom'=> "Jean", 'prenom'=>"Claude", 'contact'=>"07411220"],
            ['id'=>2, 'nom'=> "Morino", 'prenom'=>"Jax", 'contact'=>"06411220"],
            ['id'=>3, 'nom'=> "Mad", 'prenom'=>"Max", 'contact'=>"06466500"],
            ['id'=>4, 'nom'=> "Matamoros", 'prenom'=>"Elie", 'contact'=>"02411220"],
            ['id'=>5, 'nom'=> "Manolo", 'prenom'=>"King", 'contact'=>"07499020"],

        ]);
    }
}
