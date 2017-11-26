<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('planteurs_id')->index('fk_assignations_planteurs_idx');
			$table->integer('acheteurs_id')->index('fk_assignations_acheteurs1_idx');
			$table->primary(['id','planteurs_id','acheteurs_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assignations');
	}

}
