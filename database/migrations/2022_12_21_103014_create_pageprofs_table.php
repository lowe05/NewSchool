<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageprofsTable extends Migration {

	public function up()
	{
		Schema::create('pageprofs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('mois', 255);
			$table->string('observation', 255);
			$table->string('nom_prof', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('pageprofs');
	}
}