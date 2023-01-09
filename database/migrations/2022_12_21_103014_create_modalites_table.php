<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModalitesTable extends Migration {

	public function up()
	{
		Schema::create('modalites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('niveau_id')->unsigned();
			$table->string('montant', 255);
			$table->integer('typemodalites')->unsigned();
			$table->integer('annee_id')->unsigned();
			$table->date('delai_paie');
		});
	}

	public function down()
	{
		Schema::drop('modalites');
	}
}