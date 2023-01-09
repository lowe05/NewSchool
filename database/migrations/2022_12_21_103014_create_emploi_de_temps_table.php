<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploiDeTempsTable extends Migration {

	public function up()
	{
		Schema::create('emploi_de_temps', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('jours', 255);
			$table->string('heures', 255);
			$table->integer('prof_id')->unsigned();
			$table->integer('classe_id')->unsigned();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('emploi_de_temps');
	}
}