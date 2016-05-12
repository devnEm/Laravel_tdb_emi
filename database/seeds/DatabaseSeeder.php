<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Produit;
use App\Models\Avenant;
use App\Models\Mois;
use App\Models\Support;
use App\Models\Categorie;


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
            'isAdmin'    =>  true,
        ]);
        User::create([
            'name'      => 'devnem',
            'email'     =>  'devnem@example.com',
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

        Categorie::create(['label'=>'commercial']);
        Categorie::create(['label'=>'blog']);

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

        for($i=1 ; $i<=36 ; $i++){
            Avenant::create([
                'objectif'=> 5000,
                'points'=>400,
                'produit_id'=> $i,
                'user_id'=>2
            ]);
        }



        
    }
}
