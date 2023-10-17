<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produits')->insert([
            ['id'=>1, 'nom'=> "Doliprane",'photo'=>'public/images/produits/gcoGgrbWFb4kRJUxlqyy5pPvcSuHOUP18DYU6LFO.png', 'poids'=>"2G", 'taille'=>"8cm", 'typeP_id'=> 15,'supprimer'=>0,'marque_id'=>17,'qualite_id'=>19],
            ['id'=>2, 'nom'=> "Coartem",'photo'=>'public/images/produits/or0pK7FVSrguLPBETeXfwqGuAU45vTmzAM4PeGqr.webp', 'poids'=>"3G", 'taille'=>"6cm", 'typeP_id'=> 15,'supprimer'=>0,'marque_id'=>17,'qualite_id'=>19],

        ]);
    }
}
