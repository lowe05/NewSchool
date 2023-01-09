<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorisationEntresSortiesTable extends Migration {

	public function up()
	{
		Schema::create('autorisation_entres_sorties', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('eleve', 255);
			$table->string('type_autorisation', 255);
			$table->string('date_absence', 255);
			$table->string('date_absence1', 255);
			$table->string('motif', 255);
			$table->string('vue_parent', 255)->nullable();
			$table->string('date_entrant', 255)->nullable();
			$table->string('heures_entrant', 255)->nullable();
			$table->string('statut_absence', 255)->nullable();
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('autorisation_entres_sorties');
	}
}