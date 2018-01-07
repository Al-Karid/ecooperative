<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Ecooperative\Assignation;

class AssignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = Faker::create('fr_FR');
        for($i=0;$i<12;$i++)
        {
            Assignation::create([
                'planteurs_id' => rand(1,12),
                'acheteurs_id' => rand(1,3)
            ]);
        }
    }
}
