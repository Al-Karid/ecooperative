<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcheteursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acheteurs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 45);
			$table->string('prenom', 45);
			$table->string('tel', 45)->unique('tel_UNIQUE');
			$table->string('email', 45)->nullable()->unique('email_UNIQUE');
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
		Schema::drop('acheteurs');
	}

}
