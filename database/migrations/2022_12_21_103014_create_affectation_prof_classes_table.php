<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffectationProfClassesTable extends Migration {

	public function up()
	{
		Schema::create('affectation_prof_classes', function(Blueprint $table) {
			$table->timestamps();
			$table->increments('id');
			$table->softDeletes();
			$table->integer('prof_id')->unsigned();
			$table->integer('classe_id')->unsigned();
			$table->integer('matiere_id')->unsigned();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('affectation_prof_classes');
	}
}