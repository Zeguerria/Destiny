<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            ['id'=>1, 'name'=> "Okawe", 'prenom'=>"Jeremy", 'email'=>"admin@gmail.com", 'password'=> '$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/kYmGdjUqGmkVkksOJrU8QbszJueJLl0QxT3Z57f9.jpg','supprimer'=>0,'pseudo'=>'Zeguerria','role_id'=>9,'profil_id'=>1],

        ]);
    }
}
