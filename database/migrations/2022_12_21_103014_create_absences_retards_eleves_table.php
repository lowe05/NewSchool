<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsencesRetardsElevesTable extends Migration {

	public function up()
	{
		Schema::create('absences_retards_eleves', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('eleve_id')->unsigned();
			$table->integer('classe_id')->unsigned();
			$table->string('retard', 255)->nullable();
			$table->string('absent', 255)->nullable();
			$table->string('present', 255)->nullable();
			$table->datetime('de');
			$table->datetime('a');
			$table->string('justification')->nullable();
			$table->string('commentaire');
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('absences_retards_eleves');
	}
}