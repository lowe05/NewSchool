<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnneeScolairesTable extends Migration {

	public function up()
	{
		Schema::create('annee_scolaires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('libelle', 255);
		});
	}

	public function down()
	{
		Schema::drop('annee_scolaires');
	}
}