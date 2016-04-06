<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Produit;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'      => 'admin',
            'email'     =>  'admin@example.com',
            'password'  =>  bcrypt('azerty'),
        ]);


        Produit::create([
            'mois' => 'janvier',
            'support'=> 'gazette',
            'indice'=> '235',
        ]);
        Produit::create([
            'mois' => 'janvier',
            'support'=> 'evenement',
            'indice'=> '235',
        ]);
        Produit::create([
            'mois' => 'janvier',
            'support'=> 'verticaux',
            'indice'=> '235',
        ]);
        Produit::create([
            'mois' => 'fevrier',
            'support'=> 'gazette',
            'indice'=> '235',
        ]);
        Produit::create([
            'mois' => 'fevrier',
            'support'=> 'verticaux',
            'indice'=> '235',
        ]);
    }
}
