<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration {

	public function up()
	{
		Schema::create('notes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('eleve_id')->unsigned();
			$table->integer('prof_id')->unsigned();
			$table->integer('matiere_id')->unsigned();
			$table->float('notation');
			$table->float('coef');
			$table->float('note_coef');
			$table->string('mention', 255);
			$table->string('appreciation', 255);
			$table->integer('classe_id')->unsigned();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('notes');
	}
}