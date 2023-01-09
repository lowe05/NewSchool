<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScolaritesTable extends Migration {

	public function up()
	{
		Schema::create('scolarites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('eleve_id')->unsigned();
			$table->integer('classe_id')->unsigned();
			$table->string('montant', 255);
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('scolarites');
	}
}