<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConvocationParentsTable extends Migration {

	public function up()
	{
		Schema::create('convocation_parents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('concerner', 255);
			$table->date('date_rdv');
			$table->time('heures');
			$table->string('motif', 255);
			$table->string('statut', 255);
			$table->string('visa_nom_parent', 255);
			$table->string('commentaire', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('convocation_parents');
	}
}