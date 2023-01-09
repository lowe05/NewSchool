<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartementsTable extends Migration {

	public function up()
	{
		Schema::create('departements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 255);
			$table->integer('chef_id')->unsigned()->nullable();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('departements');
	}
}