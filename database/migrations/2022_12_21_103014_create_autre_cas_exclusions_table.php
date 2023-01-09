<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutreCasExclusionsTable extends Migration {

	public function up()
	{
		Schema::create('autre_cas_exclusions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->date('date_exclus');
			$table->string('motif', 255);
			$table->string('visa_s_g', 255)->nullable();
			$table->string('visa_principal', 255)->nullable();
			$table->integer('cahierdeliaison_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('autre_cas_exclusions');
	}
}