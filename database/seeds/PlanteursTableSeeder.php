<?php

use Illuminate\Database\Seeder;
use Ecooperative\Planteur;
use Faker\Factory as Faker;

class PlanteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        $planteur1 = new Planteur();
        $planteur1->nom = "Agbado Same";
        $planteur1->localite = "Divo";
        // $planteur1->prenom = "Sam";
        $planteur1->tel = "02684295";
        $planteur1->save();
        
        $planteur2 = new Planteur();
        $planteur2->nom = "Karamodo Gouado";
        $planteur2->localite = "Divo";
        // $planteur2->prenom = "";
        $planteur2->tel = "36485269";
        $planteur2->save();

        for($i=0;$i<12;$i++)
        {
            Planteur::create([
                'nom' => $faker->name,
                'tel' => $faker->randomNumber,
                'localite' => $faker->city
            ]);
        }
    }
}
