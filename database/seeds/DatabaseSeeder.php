<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Produit;
use App\Vente;
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



        Vente::create([
            'client'=>'Premier client',
            'montant'=>'2000',
            'produit_id'=>1,
            'user_id'=>1
         ]);
        Vente::create([
            'client'=>'Deuxieme client',
            'montant'=>'3000',
            'produit_id'=>1,
            'user_id'=>1
        ]);
        Vente::create([
            'client'=>'Troisieme client',
            'montant'=>'4000',
            'produit_id'=>1,
            'user_id'=>1
        ]);
        Vente::create([
            'client'=>'Quatrieme client',
            'montant'=>'2000',
            'produit_id'=>2,
            'user_id'=>1
        ]);
        Vente::create([
            'client'=>'Cinquieme client',
            'montant'=>'2500',
            'produit_id'=>2,
            'user_id'=>1
        ]);
        Vente::create([
            'client'=>'Sixieme client',
            'montant'=>'1000',
            'produit_id'=>2,
            'user_id'=>1
        ]);
    }
}
