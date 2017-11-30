<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanteursListTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $r = $this->get('planteurs');
        // $r->assertExactJson(
        $r->assertJsonFragment(
            ["id"=>1,
            "nom"=>"Agbado",
            "prenom"=>"Sam",
            "tel"=>"02684295",
            "created_at"=>"2017-11-27 00:36:31",
            "updated_at"=>"2017-11-27 00:36:31",
            "deleted_at"=>null]
        );
    }
}
