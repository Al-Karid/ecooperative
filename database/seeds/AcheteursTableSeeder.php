<?php

use Illuminate\Database\Seeder;
use Ecooperative\Acheteur as A;
use Faker\Factory as F;

class AcheteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = F::create('fr_FR');

        for($i=0;$i<12;$i++)
        {
            A::create([
                'nom' => $f->name,
                'tel' => $f->phoneNumber,
                'email' => $f->email
            ]);
        }      
    }
}
