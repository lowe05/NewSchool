<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecapitulatifRetenuesTable extends Migration {

	public function up()
	{
		Schema::create('recapitulatif_retenues', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->date('date_faute');
			$table->string('faute', 255);
			$table->date('date_excution_retenue');
			$table->string('nom_visa_parent', 255);
			$table->string('visa_surveillant_apres_execut', 255);
			$table->string('visa_s_g', 255);
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('recapitulatif_retenues');
	}
}