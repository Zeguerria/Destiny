<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinataireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('destinataires')->insert([
            ['id'=>1, 'nom'=> "Vichi", 'prenom'=>"Leon", 'contact'=>"02411220"],
            ['id'=>2, 'nom'=> "Alex", 'prenom'=>"Lion", 'contact'=>"0763211"],
            ['id'=>3, 'nom'=> "Koumba", 'prenom'=>"Alin de Lont", 'contact'=>"02466500"],
            ['id'=>4, 'nom'=> "Docteur", 'prenom'=>"Guerro", 'contact'=>"01411220"],
            ['id'=>5, 'nom'=> "Moino", 'prenom'=>"Jax", 'contact'=>"07221020"],

        ]);
    }
}
