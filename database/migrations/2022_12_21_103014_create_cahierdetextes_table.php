<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCahierdetextesTable extends Migration {

	public function up()
	{
		Schema::create('cahierdetextes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('classe_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('cahierdetextes');
	}
}