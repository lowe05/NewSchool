<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembredepartementsTable extends Migration {

	public function up()
	{
		Schema::create('membredepartements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('prof_id')->unsigned();
			$table->integer('departement_id')->unsigned();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('membredepartements');
	}
}