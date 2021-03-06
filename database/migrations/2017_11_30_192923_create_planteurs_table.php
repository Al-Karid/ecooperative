<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanteursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planteurs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 45);
			$table->string('localite', 45);
			$table->string('tel', 45)->unique('tel_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planteurs');
	}

}
