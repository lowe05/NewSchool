<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConseilDeDiciplinesTable extends Migration {

	public function up()
	{
		Schema::create('conseil_de_diciplines', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('eleve_id')->unsigned();
			$table->date('date_prevu');
			$table->string('heures', 255);
			$table->string('visa_pr_conseil', 255);
			$table->string('visa_nom_parent', 255);
			$table->string('verdict', 255)->nullable();
			$table->string('visa_apres_pr_conseil', 255)->nullable();
			$table->string('visa_apres_parent', 255)->nullable();
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('conseil_de_diciplines');
	}
}