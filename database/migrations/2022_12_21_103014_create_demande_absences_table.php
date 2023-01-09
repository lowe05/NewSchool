<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandeAbsencesTable extends Migration {

	public function up()
	{
		Schema::create('demande_absences', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom_parent', 255);
			$table->string('eleve', 255);
			$table->string('date_debut', 255);
			$table->string('date_fin', 255);
			$table->string('motif', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('demande_absences');
	}
}