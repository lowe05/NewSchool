<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReglementInterieursTable extends Migration {

	public function up()
	{
		Schema::create('reglement_interieurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('titre', 255);
			$table->string('sous_titre', 255);
			$table->string('commentaire')->nullable();
			$table->string('fichier', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reglement_interieurs');
	}
}