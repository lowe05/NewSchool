<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevoirsTable extends Migration {

	public function up()
	{
		Schema::create('devoirs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('titre', 125);
			$table->string('contenu', 255);
			$table->integer('cahierdetexte_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('devoirs');
	}
}