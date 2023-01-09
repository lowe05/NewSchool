<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePunitionsTable extends Migration {

	public function up()
	{
		Schema::create('punitions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->date('date_punition');
			$table->string('nature_punition', 255);
			$table->string('visa_autorite', 255);
			$table->string('visa_s_g_apres_excut', 255);
			$table->string('nom_visa_parent');
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('punitions');
	}
}