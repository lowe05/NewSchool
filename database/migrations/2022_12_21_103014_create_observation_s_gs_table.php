<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObservationSGsTable extends Migration {

	public function up()
	{
		Schema::create('observation_s_gs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('sequence', 255);
			$table->string('remarque', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('observation_s_gs');
	}
}