<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilisateursTable extends Migration {

	public function up()
	{
		Schema::create('utilisateurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('matricule', 255);
			$table->string('prenom', 255);
			$table->string('ville', 255);
			$table->string('quartier', 255);
			$table->string('telephone', 255);
			$table->integer('role_id')->unsigned();
			$table->string('statut', 255);
			$table->integer('action_id')->unsigned();
			$table->string('photo_profil', 255);
			$table->string('slug', 255);
			$table->string('sexe', 255);
			$table->string('nationalite', 255);
			$table->string('date_naissance', 255);
		});
	}

	public function down()
	{
		Schema::drop('utilisateurs');
	}
}