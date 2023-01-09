<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCahierdeliaisonsTable extends Migration {

	public function up()
	{
		Schema::create('cahierdeliaisons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('classe_id')->unsigned();
			$table->integer('eleve_id')->unsigned();
			$table->string('professeur', 255)->nullable();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('cahierdeliaisons');
	}
}