<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Niveau extends Eloquent {

	protected $table = 'niveaux';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function modalites()
	{
		return $this->hasMany('App\Models\Modalite');
	}

	public function classes()
	{
		return $this->hasMany('App\Models\Classe');
	}

}