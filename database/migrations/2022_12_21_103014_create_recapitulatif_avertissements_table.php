<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecapitulatifAvertissementsTable extends Migration {

	public function up()
	{
		Schema::create('recapitulatif_avertissements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('motif', 255);
			$table->string('commentaire', 255);
			$table->string('visa_s_g', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('recapitulatif_avertissements');
	}
}