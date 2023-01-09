<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypemodalitesTable extends Migration {

	public function up()
	{
		Schema::create('typemodalites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 255);
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('typemodalites');
	}
}