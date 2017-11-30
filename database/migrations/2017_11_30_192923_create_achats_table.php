<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('achats', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('produit', 45);
			$table->decimal('poids', 5);
			$table->integer('montant');
			$table->decimal('latitude', 9, 6)->nullable();
			$table->decimal('longitude', 9, 6)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('acheteurs_id')->index('fk_achats_acheteurs1_idx');
			$table->integer('planteurs_id')->index('fk_achats_planteurs1_idx');
			$table->integer('produits_id')->index('fk_achats_produits1_idx');
			$table->primary(['id','produits_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('achats');
	}

}
