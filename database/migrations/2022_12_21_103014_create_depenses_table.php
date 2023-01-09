<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepensesTable extends Migration {

	public function up()
	{
		Schema::create('depenses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('montant', 255);
			$table->string('justification', 255);
			$table->string('commentaire', 255);
			$table->integer('user_id')->unsigned();
			$table->integer('annee_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('depenses');
	}
}