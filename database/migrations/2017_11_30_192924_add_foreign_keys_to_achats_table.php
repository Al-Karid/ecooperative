<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAchatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('achats', function(Blueprint $table)
		{
			$table->foreign('acheteurs_id', 'fk_achats_acheteurs1')->references('id')->on('acheteurs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('planteurs_id', 'fk_achats_planteurs1')->references('id')->on('planteurs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produits_id', 'fk_achats_produits1')->references('id')->on('produits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('achats', function(Blueprint $table)
		{
			$table->dropForeign('fk_achats_acheteurs1');
			$table->dropForeign('fk_achats_planteurs1');
			$table->dropForeign('fk_achats_produits1');
		});
	}

}
