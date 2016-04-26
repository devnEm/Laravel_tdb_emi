<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Produit;
use App\Vente;
use App\Mois;
use App\Support;


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


        Support::create([
            'label'=>'Gazette'
            ]);
        Support::create([
            'label'=>'Verticaux'
            ]);
        Support::create([
            'label'=>'Evenement'
            ]);


        Mois::create([
            'label'=>'Janvier'
            ]);
        Mois::create([
            'label'=>'Fevrier'
            ]);
        Mois::create([
            'label'=>'Mars'
            ]);
        Mois::create([
            'label'=>'Avril'
            ]);
        Mois::create([
            'label'=>'Mai'
            ]);
        Mois::create([
            'label'=>'Juin'
            ]);
        Mois::create([
            'label'=>'Juillet'
            ]);
        Mois::create([
            'label'=>'Aout'
            ]);
        Mois::create([
            'label'=>'Septembre'
            ]);
        Mois::create([
            'label'=>'Octobre'
            ]);
        Mois::create([
            'label'=>'Novembre'
            ]);
        Mois::create([
            'label'=>'Decembre'
            ]);

        for($i=1 ; $i<=12 ; $i++)
        {

            Produit::create([
                'mois_id' => $i,
                'support_id'=> 1
            ]);
            Produit::create([
                'mois_id' => $i,
                'support_id'=> 2
            ]);
            Produit::create([
                'mois_id' => $i,
                'support_id'=> 3
            ]);
        };



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
