<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypesdedivisionsTable extends Migration {

	public function up()
	{
		Schema::create('typesdedivisions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 255);
		});
	}

	public function down()
	{
		Schema::drop('typesdedivisions');
	}
}