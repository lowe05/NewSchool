<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetardsAbsencesPersonnelsTable extends Migration {

	public function up()
	{
		Schema::create('retardsAbsencesPersonnels', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('personnel_id')->unsigned();
			$table->string('absent', 255)->nullable();
			$table->string('retard', 255)->nullable();
			$table->datetime('de');
			$table->string('a');
			$table->string('justification', 255);
			$table->string('commentaire', 255);
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('retardsAbsencesPersonnels');
	}
}