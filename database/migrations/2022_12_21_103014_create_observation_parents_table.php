<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObservationParentsTable extends Migration {

	public function up()
	{
		Schema::create('observation_parents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('date_observe', 255);
			$table->string('remarque', 255);
			$table->string('nom_parent', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('observation_parents');
	}
}