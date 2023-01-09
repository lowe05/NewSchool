<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExclusionDeCoursTable extends Migration {

	public function up()
	{
		Schema::create('exclusion_de_cours', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('date_heure', 255)->nullable();
			$table->string('motif', 255);
			$table->string('punition', 255);
			$table->string('visa_prof', 255);
			$table->string('visa_s_g', 255)->nullable();
			$table->string('visa_nom_parent', 255)->nullable();
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('exclusion_de_cours');
	}
}