<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandeRdvsTable extends Migration {

	public function up()
	{
		Schema::create('demande_rdvs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('moi', 255);
			$table->string('avec', 255);
			$table->string('jour_disponible', 255);
			$table->string('motif', 255);
			$table->string('visa_senseur', 255);
			$table->string('statut', 255);
			$table->string('accorder_le', 255)->nullable();
			$table->string('nom_parent', 255)->nullable();
			$table->string('confirmation', 255)->nullable();
			$table->string('conf_le', 255)->nullable();
			$table->string('heure_conf', 255)->nullable();
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('demande_rdvs');
	}
}