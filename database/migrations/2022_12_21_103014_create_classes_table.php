<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassesTable extends Migration {

	public function up()
	{
		Schema::create('classes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 255);
			$table->integer('niveau_id')->unsigned();
			$table->integer('titulaire_id')->unsigned()->nullable();
			$table->integer('annee_id')->unsigned();
			$table->integer('delegue_id')->unsigned()->nullable();
			$table->integer('typesdedivision_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('classes');
	}
}