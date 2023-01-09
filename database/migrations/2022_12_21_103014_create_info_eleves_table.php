<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfoElevesTable extends Migration {

	public function up()
	{
		Schema::create('info_eleves', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('classe', 255);
			$table->string('nom_pere', 255);
			$table->string('tel_pere', 255);
			$table->string('fonction_pere', 255);
			$table->string('email_pere', 255);
			$table->string('nom_mere', 255);
			$table->string('tel_mere');
			$table->string('fonction_mere', 255);
			$table->string('email_mere');
			$table->string('nom_tuteur', 255);
			$table->string('tel_tuteur', 255);
			$table->string('fonction_tuteur', 255);
			$table->string('email_tuteur', 255);
			$table->string('parcour_scolaire', 255);
			$table->string('allergie', 255);
			$table->string('type_allergie', 255);
			$table->string('tel_hopital', 255);
			$table->string('fichier1', 255);
			$table->string('fichier2', 255);
			$table->string('fichier3', 255);
			$table->integer('eleve_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('info_eleves');
	}
}