<?php

use Illuminate\Database\Seeder;
use Ecooperative\Planteur;

class PlanteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planteur1 = new Planteur();
        $planteur1->nom = "Agbado";
        $planteur1->prenom = "Sam";
        $planteur1->tel = "02684295";
        $planteur1->save();
        
        $planteur2 = new Planteur();
        $planteur2->nom = "Karamodo";
        $planteur2->prenom = "Gouado";
        $planteur2->tel = "36485269";
        $planteur2->save();
    }
}
