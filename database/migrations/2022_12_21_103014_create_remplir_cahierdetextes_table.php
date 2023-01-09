<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRemplirCahierdetextesTable extends Migration {

	public function up()
	{
		Schema::create('remplir_cahierdetextes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('prof_id')->unsigned();
			$table->integer('matiere_id')->unsigned();
			$table->string('typetitre', 125);
			$table->string('texte', 255)->nullable();
			$table->integer('cahierdetexte_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('remplir_cahierdetextes');
	}
}