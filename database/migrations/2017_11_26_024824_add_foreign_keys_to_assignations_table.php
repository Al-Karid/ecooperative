<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAssignationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('assignations', function(Blueprint $table)
		{
			$table->foreign('acheteurs_id', 'fk_assignations_acheteurs1')->references('id')->on('acheteurs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('planteurs_id', 'fk_assignations_planteurs')->references('id')->on('planteurs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('assignations', function(Blueprint $table)
		{
			$table->dropForeign('fk_assignations_acheteurs1');
			$table->dropForeign('fk_assignations_planteurs');
		});
	}

}
