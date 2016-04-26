<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Produit;
use App\Avenant;
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

        for($i=1 ; $i<=36 ; $i++){
            Avenant::create([
                'objectif'=> 2000,
                'points'=>250,
                'produit_id'=> $i,
                'user_id'=>1
            ]);
        }



        
    }
}
